<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <main class="container-fluid bg-primary " style="height : 90vh">
        <div class="container d-flex justify-content-center 100vh">
            
            <div class="bg-white p-4 rounded w-70 mt-5 mb-5">
                <div class="row">

                <div class="col-12 mb-3">
                        <p class="h1 text-center">Ajouter</p>
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

                    <div class="col-12 mb-3">
                        <label for="liste" class="form-label">Accréditation :</label>
                        <select class="form-select" id="liste">
                            <option value="Moderateur">Modérateur</option>
                            <option value="Administrateur">Administrateur</option>
                        </select>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <input type="button" id="inscription" value="Ajouter" class="btn btn-primary">
                    </div>

                </div>
            </div>
        </div>
    </main>
  
    
</body>
</html>