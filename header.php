<html>
    <head>
        <title>BOXTOBED</title>
        <link rel="stylesheet" media="screen" href="css/bootstrap.css" />
        <link rel="stylesheet" media="screen" href="css/BOXTOBED.css" />
    </head>
    <body>
      <div class="container-narrow">
        <div class="header">
          <div class="navbar navbar-fixed-top">
            <div class="nav-collapse collapse">
              <ul class="nav navbar-nav">
                <?php if (!isset($user)) { ?>
                  <li><a href="login.php">Connexion</a></li>
                  <li><a href="register.php">Inscription</a></li>
                <?php } else { ?>
                  <li><a href="logout.php">Déconnexion</a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="body-content">

