fetch('./api/utilisateur.json')
.then(reponse => reponse.json())
.then(utilisateurs => {

    const tbody = $("#tbody");
    tbody.empty() ;

    utilisateurs.forEach(utilisateur => {
        const row = $("<tr></tr>") ;

        row.append(
            `<td> ${utilisateur.nom} </td> 
            <td> ${utilisateur.prenom} </td> 
            <td> ${utilisateur.mail} </td> 
            <td> <button type='button' class='btn btn-danger'> Refuser </button> </td> );
            <td> <button type='button' class='btn btn-success'> Accepter </button> </td> `);


            tbody.append(row);
    });
    
});

$(document).ready(function(){
    $("#inscription").on("click", function(event){
        event.preventDefault();

        let email = $("#mail").val();
        let domaine = "@laplateforme.io"; // Domaine autorisé

        if (email.endsWith(domaine)) {
            alert("Inscription réussie !");
        } else {
            $("#texte_mail").show()
        }
    });
});

$(document).ready(function(){
    $("#connexion").on("click", function(){
        alert("Vous etes inscrit");
        
    });
});




