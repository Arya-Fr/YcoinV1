<form action="#" method="POST">
  <div class="container">
    <div class="imgcontainer">
        <img src="/assets/img/ynov.jpg" alt="icon" class="icon" width="150px" style="padding: 15px">
    </div>
    <h1>Inscription</h1>
    <p>Renseignez ces champs afin de vous inscrire.</p>
    <hr>
    <div class="form-group">
      <label for="email"><b>Email</b></label>
      <input class="form-control" type="text" placeholder="Saisir votre mail" name="mail" required>
    </div>
    <div class="form-group">
      <label for="email"><b>pseudo</b></label>
      <input class="form-control" type="mail" placeholder="Saisir votre pseudo" name="pseudo" required>
    </div>

    <div class="form-group">
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
    </div>

    <div class="form-group">
      <button class="btn btn-default"  type="submit" class="signupbtn">S'inscrire</button>
    </div>
    <a href="/login">Déjà inscrit Identifiez vous</a>
  </div>
</form>