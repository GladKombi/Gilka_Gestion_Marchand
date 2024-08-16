<?php 
if(isset($_GET['idbloc']) && !empty($_GET['idbloc'])){
    $id=$_GET['idbloc'];

    $req=$connexion->prepare("SELECT * FROM place where numplace=?");
    $req->execute([$id]);
    $tab=$req->fetch();

    $url="../models/update/up-place.php?idbloc=".$id;//Cette varible permet de savoir sur quelle page l'action va etre executée lors de la modification
     $btn="Modifier";//On chager le texte sur le button qui sert à modifier ou ajouter
     $title="Modifier place";
}else{
    $url="../models/add/add-place.php";//Cette varible permet de savoir sur quelle page l'action va etre executée lors de l'enregistrement. il sera mit dans l'attribut action dans le form
    $btn="Enregistrer";//On chager le texte sur le button qui sert à modifier ou ajouter
    $title="Ajouter place";
   }

    #La requette qui permet de faire les affichages et recherche
    if(isset($_GET['search']) && !empty($_GET['search'])){
        $search=$_GET['search'];
        $getData=$connexion->prepare("SELECT * from place WHERE supprimer=? AND nom LIKE ? OR postnom LIKE ? OR prenom LIKE ? 
        OR genre LIKE ? OR adresse LIKE ? OR telephone LIKE ?");
        $getData->execute([0,  $search."%", $search."%", $search."%", $search."%", $search."%", $search."%"]);
    }
    else{
        $getData=$connexion->prepare("SELECT bloc.designation,bloc.id,place.bloc,place.numplace AS Numero FROM bloc,place WHERE bloc.id=place.bloc AND bloc.supprimer=0 and place.supprimer=0");
        $getData->execute();
    }


?>