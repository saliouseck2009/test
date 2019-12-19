<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Parrainage TDSI</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=e319b54c8270415d062c630b2d92ac38">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="index.php">JOURNEE &nbsp;D'INTEGRATION &nbsp;TDSI 2019-2020</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="inscription.php">Inscription</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>inscription</h2>
                </div>
                <form method="post" action="bd.php">
                    <legend class="etoile">les champs précédés d'un étoile(*) sont obligatoires</legend>
                    <div class="form-group"><label for="nom">Nom*</label><input class="form-control" type="text" name="nom" placeholder="Votre Nom"></div>
                    <div class="form-group"><label for="email">Prenom*</label><input class="form-control" type="text" name="prenom" placeholder="Votre Prenom"></div>
                    <div class="form-group"><label for="email">Numero Telephone*</label><input class="shadow-sm form-control" type="tel" name="tel"></div>
                    <div class="form-group"><label for="subject">Classe*</label><select class="form-control" name="niveau" id="subject"><option value="1">L1</option><option value="2">L2</option><option value="3">L3</option></select></div>
                    <div class="form-group"><label for="email">Email*</label><input class="form-control" type="email" name="mail" placeholder="Votre Email" id="email"></div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6 button">
                                <!-- Start: ajouter une photo --><input type="file" name="photo">
                                <!-- End: ajouter une photo -->
                            </div>
                        </div>
                    </div><button class="btn btn-primary btn-block" type="submit">Enregistrer</button></form>
            </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Projects</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/script.min.js?h=f82c1f62e9f66b57f268c9f78badf050"></script>
</body>

</html>