
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Site_V2</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="app.php">Home</a></li>
              <li><a href="hist.php">A propos</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($_SESSION['login']); ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Mon compte</li>
                  <li><a href="maliste.php">Mes jeux</a></li>
                  <li><a href="liste.php">Liste des jeux</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Déconnexion</li>
                  <li><a href="logout.php">Se déconnecter</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </body>
</html>