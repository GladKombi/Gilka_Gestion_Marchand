<?php 
if(isset($_GET['idtype']) && !empty($_GET['idtype'])){
    $id=$_GET['idtype'];
    $req=$connexion->prepare("SELECT * FROM typepaiement where id=?");
    $req->execute([$id]);
    $tab=$req->fetch();
    
    $url="../models/update/up-type.php?idtype=".$id;//Cette varible permet de savoir sur quelle page l'action va etre executée lors de la modification
     $btn="Modifier";//On chager le texte sur le button qui sert à modifier ou ajouter
     $title="Modifier type de paiement";
}else{
    $url="../models/add/add-typepaiement.php";//Cette varible permet de savoir sur quelle page l'action va etre executée lors de l'enregistrement. il sera mit dans l'attribut action dans le form
    $btn="Enregistrer";//On chager le texte sur le button qui sert à modifier ou ajouter
    $title="Ajouter type de paiement";
   }

    #La requette qui permet de faire les affichages et recherche
    if(isset($_GET['search']) && !empty($_GET['search'])){
        $search=$_GET['search'];
        $getData=$connexion->prepare("SELECT * from typepaiement WHERE supprimer=? AND nom LIKE ? OR postnom LIKE ? OR prenom LIKE ? 
        OR genre LIKE ? OR adresse LIKE ? OR telephone LIKE ?");
        $getData->execute([0,  $search."%", $search."%", $search."%", $search."%", $search."%", $search."%"]);
    }
    else{
        $getData=$connexion->prepare("SELECT bloc.id,bloc.designation,typepaiement.id,typepaiement.bloc,typepaiement.nomtype,typepaiement.montant FROM bloc,typepaiement WHERE bloc.id=typepaiement.bloc AND bloc.supprimer=0 AND typepaiement.supprimer=0");
        $getData->execute();
    }


?>