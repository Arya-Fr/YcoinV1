<body>
<form action="#" method="post">
  <div class="container">
    <div class="imgcontainer">
        <img src="/assets/img/ynov.jpg" alt="icon" class="icon" width="150px" style="padding: 15px">
    </div>
    <hr>
    <div class="form-group">
        <label for="pseudo"><b>Pseudo</b></label>
        <input class="form-control" type="text" placeholder="Entrer votre pseudo" name="pseudo" required>
    </div>

    <div class="form-group">
        <label for="mail"><b>Mail</b></label>
        <input class="form-control" type="mail" placeholder="Entrer votre Email" name="mail" required>
    </div>

    <div class="form-group">
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
    </div>
        
    <div class="form-group">
        <button class="btn btn-default" type="submit">Login</button>
    </div>
    <a href="/subscribe">Pas encore inscrit ? Cliquez ici !</a>
  </div>
</form>
</body>
</html>