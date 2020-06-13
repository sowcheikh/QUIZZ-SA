<!doctype html>
<html lang="en">

<head>
    <title>Joueur</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=WEBROOT?>/public/css/style.css">


</head>

<body>

<div class="container bg-light border rounded" style="height: 35rem; width: 80rem;">
    <div class="row h-25">
        <div class="col-6 col-xs-2 col-sm-3 col-md-3 col-lg-1">
            <img src="./public/img/logo-QuizzSA.png" class="postion-relative mt-2" style="height: 10%;" alt="">
        </div>
        <div class="col-9 col-xs-3 col-sm-3 col-md-6 col-lg-9">
            <h4 class="title text-center text-nowrap text-md-left mt-3">BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ </h4>
            <h4 class="title text-center text-nowrap text-md-left mt-3">JOUER ET TESTER VOTRE NIVEAU DE CULTURE GÉNÉRALE </h4>
        </div>
    </div>
    <div class="row" style="height: 70%;">
        <div class="col-8 bg-light border rounded overflow-auto">
        <div class="row">
                <div class="col-3"><img src="./public/img/avatar.png" class="img-circle" alt="avatar" width="100" height="100">
                </div>
                <div class="col-9">
                <h5 class="title text-secondary text-right">Cheikh Sow</h5>
                <a href="index.php?page=./src/pages/logout" class="btn btn-danger mt-2 float-right">Déconnexion</a>
                </div>
            </div>
            <div class="row shadow-sm mb-3 bg-white rounded" style="height: 20%;">
            <div class="col">
                <h5 class="text-title text-center"><u>Question 1/4</u></h5>
                <h3 class="text-title text-center">Les langages du Web ?</h3>
            </div>
            </div>
            <div class="row" style="height: 35%;">
                <div class="col ">
                <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                HTML
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                CSS
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                R
            </label>
            </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div class="col-4 shadow-sm bg-white rounded">
        <div class="mr-auto ml-auto mt-1">
  <a class="btn btn-outline-secondary btn-sm ml-3" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
    Top Scores
  </a>
  <button class="btn btn-outline-info btn-sm ml-3" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
   Mon Meilleur Score
  </button>
</div>
<div class="collapse" id="collapseExample1">
</div>
<div class="collapse" id="collapseExample2">
  <div class="card card-body">
      mon meilleur score est 25pts.
  </div>
</div>
        </div>
    </div>
</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?=WEBROOT?>/public/js/script.js" ></script>
    <script src="<?=WEBROOT?>/public/js/score.js"></script>
</body>
</html>