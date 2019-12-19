<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Parrainage TDSI</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
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
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="inscription.php">Inscription</a></li>
                    </ul>
            </div>
            </div>
        </nav>
        <main class="page lanidng-page">
            <section class="portfolio-block block-intro">
                <div class="container"><img src="assets/img/Annotation%202019-12-16%20232405.png?h=845c4826a49f16a093f6721e4e2de24a">
                    <div class="about-me">
                        <p>Bonjour!bienvenue dans le site de la journée &nbsp;d'intégration de la TDSI <br>2019-2020. Veillez vous inscrire si ce n'est pas fait</p><a class="btn btn-outline-primary" role="button" href="inscription.php">inscription</a></div>
                </div>
            </section>
            <section class="portfolio-block photography">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a></div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a></div>
                        <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a></div>
                    </div>
                </div>
            </section>
            <section class="portfolio-block call-to-action border-bottom">
                <div class="container">
                    <div class="d-flex justify-content-center align-items-center content">
                        <h3></h3><img src="assets/img/5df81053ae8ac_image.png?h=d593e74e84d99fdac9730268a231f36c"></div>
                </div>
            </section>
                <?php
            try{
                $bdd = new PDO('mysql:host=localhost;dbname=parrainage', 'root', '');
            }catch(Exception $e){
                echo die(' Erreur '.$e->getMessage());
            }

            $reqSelect = $bdd->query('SELECT nom,prenom, mail,tel from L1_TDSI') or die(print_r($bdd->errorInfo()));

        ?>
            <section class="portfolio-block skills">
                <div class="about-me">
                        <a class="btn btn-outline-primary" role="button" href="parrainage.php">generer</a>
                    </div>
                <div class="container">
                    <!-- Start: portfolio heading -->
                    <div class="heading">
                        <h2>LISTE DE PARRAINAGE&nbsp;</h2>
                    </div>
                    <!-- End: portfolio heading -->
                    <!--div class="row">
                        <div class="col-md-4">
                            <div class="card special-skill-item border-0">
                                <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                                <div class="card-body">
                                <?php
                                    while($data = $reqSelect->fetch()){
                                ?>
                                    <h3 class=card-title>Nom:<?php echo $data['nom']; ?>.</h3>
                                    <h3 class="card-title">Prenom:<?php echo $data['prenom']; ?></h3>
                                    <h3 class="card-title">Numero:<?php echo $data['tel']; ?></h3>
                                    <h3 class="card-title">Email:<?php echo $data['mail']; }?></h3>
                                    <?php $reqSelect->closeCursor();?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 offset-lg-0">
                            <div class="card special-skill-item border-0">
                                <div class="card-header bg-transparent border-0"></div>
                            </div>
                            <h3 class="d-lg-flex justify-content-lg-center align-items-lg-center">parrainé(e) par</h3>
                        </div>
                        <div class="col-md-4">
                            <div class="card special-skill-item border-0">
                                <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                                <div class="card-body">
                                    <?php
                                        $reqSelect = $bdd->query('SELECT nom,prenom, mail,tel from L2_3_TDSI') or die(print_r($bdd->errorInfo()));

                                        while($data = $reqSelect->fetch()){
                                    ?>
                                    <h3 class="card-title">Nom : <?php echo $data['nom']; ?></h3>
                                    <h3 class="card-title">Prenom : <?php echo $data['prenom']; ?></h3>
                                    <h3 class="card-title">Numero : <?php echo $data['tel']; ?></h3>
                                    <h3 class="card-title">Email : <?php echo $data['mail']; }?></h3>
                                    <?php $reqSelect->closeCursor();?>
                                </div>
                            </div>
                        </div>
                    </div!-->
                    
                    <table class="table-fill">
                        <thead>
                        <tr>
                            <th class="text-left">Etudiants</th>
                            <th class="text-left">Parrains</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        <tr>
                            <td class="text-left">-</td>
                            <td class="text-left">-</td>
                        </tr>
                        <tr>
                            <td class="text-left">-</td>
                            <td class="text-left">-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
        <footer class="page-footer">
            <div class="container">
                <div class="links"><a href="#">About us</a><a href="#">Contact us</a><a href="#">Projects</a></div>
                <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
        <script src="assets/js/script.min.js?h=f82c1f62e9f66b57f268c9f78badf050"></script>
</body>

</html>