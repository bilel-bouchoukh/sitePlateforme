<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<header>
    
</header>

    <main class="container-fluid bg-primary" style="height : 90vh">
        <div class="container d-flex justify-content-center 100vh">
            
            <div class="bg-white p-4 rounded w-70 mt-5 mb-5">
                <div class="row">

                <div class="col-12 mb-3">
                        <p class="h1 text-center">Inscription</p>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="nom" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="nom" placeholder="Nom">
                    </div>
                    
                    <div class="col-12 mb-3">
                        <label for="prenom" class="form-label">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Prénom">
                    </div>
                    
                    <div class="col-12 mb-3">
                        <label for="mdp" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" id="mdp" placeholder="Mot de passe">
                    </div>
                    
                    <div class="col-12 mb-3">
                        <label for="mail" class="form-label">Adresse mail :</label>
                        <input type="email" class="form-control" id="mail" placeholder="Adresse mail">
                        <p id="texte_mail" style="display: none; color : red ">Seul les personnes avec un domaine la plateforme peuvent s'inscrire</p>
                    </div>
                    
                    <div class="col-12 text-center">
                        <input type="button" id="inscription" value="Inscription" class="btn btn-primary">
                    </div>

                    <p class="text-center pt-3">Vous êtes déjà inscrit ? <a href="connexion.php">Connectez vous</a></p>

                </div>
            </div>
        </div>
    </main>
    
</body>
</html>
