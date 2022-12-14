<?php
    // Turn of error reporting
    error_reporting(0);
    include_once("php/main.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hyperinflation</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-primary">
        <a class="navbar-brand" href="#">Hyperinflation (1923)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="images">Bilder</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Themen
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="page?subject=wmrpblk">Weimarer Republik</a>
                    <a class="dropdown-item" href="page?subject=hyperinflationDesc">Was ist eine Hyperinflation?</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="assets/pdf/Credits.pdf">Credits & Copyright</a>
                </div>
            </li>
          </ul>
        <form class="form-inline my-2 my-lg-0" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Artikel suchen" aria-label="Artikel suchen" name="q">
            <button class="btn btn-outline-success my-2 my-sm-0 searchButton" type="submit">Suchen</button>
        </form>
        </div>
      </nav>

      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1>Bildersammlung</h1>
                  <hr />
                  <div>
                      <img style="width: 40%; height: auto;" src="https://www.mein-lernen.at/images/hyperinflation.jpeg" alt="Bild-1" title="Quelle: https://www.mein-lernen.at/images/hyperinflation.jpeg">
                      <p>
                          Eine normale Familie z??hlt ihr Geld in der Hyperinflation.
                      </p>
                  </div>
                  <hr />
                  <div>
                      <img style="width: 40%; height: auto;" src="https://www.tagesspiegel.de/gesellschaft/images/inflatiobild/alternates/BASE_21_9_W1000/inflatiobild.jpeg" alt="Bild-2" title="Quelle: https://www.tagesspiegel.de/gesellschaft/images/inflatiobild/alternates/BASE_21_9_W1000/inflatiobild.jpeg">
                      <p>
                          Die Polizei der Weimarer Republik stopft ein Haufen Geld in einen Topf.
                      </p>
                  </div>
              </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>