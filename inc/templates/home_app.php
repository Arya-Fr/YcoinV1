<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ycoin</title>
    <link rel="stylesheet" href="/assets/css/cssHome.css">

</head>

<body>
    <div class="container">
        <button class="deco"><a href="/logout">Déconnexion</a></button>
        <div class="blocYcoin">
            <h1>
                Ycoin
            </h1>
            <p>
            <?php echo $argent[0]; ?>
            </p>
        </div>
        <div class="blocMinage">
            <h1>
                Minage
            </h1>
            <div class="miniblocMinage">
                <h2>
                    10
                </h2>
            </div>
            <div class="progress">
                <div class="color" id="barre"></div>
            </div>
            <form action="#" method="POST" id="mine">
                <button type="button" id="minbut"><input name="minage" value=""> Miner</button>
            </form>
        </div>
        <div class="blocTransfert">
            <form action="#" method="POST">
                <h1>
                    Transfert
                </h1>
                <input type="number" value="0" min="0" max="1000" name="montant" required>
                <button type="submit">Envoyer</button>
                
            </div>
            <div class="blocContact" id="myDIV">
                <h1>
                    Contacte
                </h1>
                <button type="button" class="btn active"><input name="active" value="aryaAC" class="temp" id="ac">aryaAc</button><br>
                <button type="button" class="btn"><input name="" value="Marius" class="temp" id="">Marius</button><br>
                <button type="button" class="btn"><input name="" value="andreas" class="temp" id="">andreas</button><br>
                <button type="button" class="btn"><input name="" value="Romain" class="temp" id="">Romain</button><br>
                <button type="button" class="btn"><input name="" value="gwen" class="temp" id="">gwen</button>
            </form>
        </div>
    </div>
</body>