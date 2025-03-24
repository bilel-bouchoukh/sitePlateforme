<?php

$filename = (isset($_GET['filename'])) 
    ? $_GET['filename'] 
    : NULL;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Document</title>
</head>
<body>

    <header>

    <?php include_once('./includes/navbar.php') ?>

    </header>

    <main>
        <?php

            if($filename && file_exists(filename : "./files/$filename.php")){
                
                include("./files/$filename.php");
            }else{

                include("./files/connexion.php");
            }

        ?>
    </main>

    <footer>
    <div class="container-fluid text-center bg-dark">
        <div class="row">
            <!-- Colonne 1 : Logo -->
            <div class="col-md-4 mb-3 mt-3">
                <h5 class="text-white h1">LaPlateforme</h5>
                <img src="./asset/téléchargement1.png" alt="Logo" width="120">
            </div>

            <!-- Colonne 2 : Liens rapides avec icônes -->
            <div class="col-md-4 mb-3 mt-3">
                <h5 class="text-white h1">Liens utiles</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php?filename=connexion" class="text-white text-decoration-none">
                        <i class="fas fa-sign-in-alt"></i> Connexion
                    </a></li>
                    <li><a href="index.php?filename=inscription" class="text-white text-decoration-none">
                        <i class="fas fa-user-plus"></i> Inscription
                    </a></li>
                    <li><a href="index.php?filename=calendrier" class="text-white text-decoration-none">
                        <i class="far fa-calendar-alt"></i> Calendrier
                    </a></li>
                    <li><a href="index.php?filename=backoffice" class="text-white text-decoration-none">
                        <i class="fas fa-tools"></i> BackOffice
                    </a></li>
                    <li><a href="index.php?filename=admin" class="text-white text-decoration-none">
                        <i class="fas fa-tools"></i> Admnisatrateur
                    </a></li>
                </ul>
            </div>

            <!-- Colonne 3 : Contact avec icônes -->
            <div class="col-md-4 mb-3 mt-3">
                <h5 class="text-white h1">Contact</h5>
                <p><i class="fas fa-envelope "></i> <div class="text-white"> contact@laplateforme.com </div></p>
                <p><i class="fas fa-phone  "></i> <div class="text-white">+33 1 23 45 67 89 </div></p>
                <p><i class="fas fa-map-marker-alt "></i> <div class="text-white">123, Rue de Bootstrap, Paris </div></p>
            </div>
        </div>

        <!-- Réseaux sociaux -->
        <div class="mt-3">
            <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>

        <!-- Ligne du bas -->
        <div class="mt-3">
            <p class="mb-0 text-white">&copy; 2024 LaPlateforme. Tous droits réservés.</p>
        </div>
    </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./js/script3.js"></script>


    
</body>
</html>




