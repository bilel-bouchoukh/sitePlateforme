<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Responsive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header>
        
    </header>
    


    <main class="container-fluid bg-primary" style="height : 66.5vh">
    <div class="container d-flex justify-content-center 100vh ">
        
        <div class="bg-white p-4 rounded w-70 mt-5 mb-5">
            <div class="row">

            <div class="col-12 mb-3">
                    <p class="h1 text-center">Connexion</p>
                </div>
                
                <div class="col-12 mb-3">
                    <label for="mail" class="form-label">Adresse mail :</label>
                    <input type="email" class="form-control" id="mail" placeholder="Adresse mail">
                </div>

                <div class="col-12 mb-3">
                    <label for="mdp" class="form-label">Mot de passe :</label>
                    <input type="password" class="form-control" id="mdp" placeholder="Mot de passe">
                </div>
                
                <div class="col-12 text-center">
                    <input type="button" id="connexion" value="Connexion" class="btn btn-primary">
                    <p id="connexion_texte" style="color: green; display:none">Vous etes bien connecté</p>
                </div>

                <p class="text-center pt-3">Vous êtes pas inscrit ? <a href="inscription.php">Inscrivez vous</a></p>
            </div>
        </div>
    </div> 
    </main>

    <footer>
    
    

    </footer>

    
    
</body>
</html>
