<?php

function envoi(int $montant,string $recoi , PDO $pdo): bool
{
	$id = $_SESSION['user_id'][0];

	$stmt = $pdo->prepare('SELECT id,argent FROM utilisateur WHERE id = :id');
	$stmt->execute(['id' => $id]);
	$id = $stmt->fetch();

	$stmt = $pdo->prepare('SELECT id,argent FROM utilisateur WHERE pseudo = :pseudo');
	$stmt->execute(['pseudo' => $recoi]);
	$idrec = $stmt->fetch();	

	if ($id[1] >= $montant){

		$sql = 'INSERT INTO `transaction` (`quantité`,`id_envois`,`id_reçois`) VALUES (:montant,:ide,:idr)';
		$stmt = $pdo->prepare($sql);
		$stmt->execute([
			'montant' => $montant,
			'ide' => $id[0],
			'idr' => $idrec[0]
		]);

		$resultat = $id[1] - $montant;

		$stmt = $pdo->prepare('UPDATE utilisateur SET argent = :resultat WHERE id =:id');
		$stmt->execute([
			'resultat' => $resultat,
			'id' => $id[0]
		]);

		$resultat = $idrec[1] + $montant;

		$stmt = $pdo->prepare('UPDATE utilisateur SET argent = :resultat WHERE id =:id');
		$stmt->execute([
			'resultat' => $resultat,
			'id' => $idrec[0]
		]);

		$data = 'Id envois :' . $id[0] . '| Id reçois :' . $idrec[0] . '| Montant échanger :' . $montant;

		$fichier = fopen('../inc/livre_de_compte.txt', 'a');

		fputs($fichier,"\n");
		fwrite($fichier,$data);
	
		fclose($fichier);
		return true;
	}else{
		return false;
	}
}