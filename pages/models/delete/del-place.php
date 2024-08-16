<?php
  include('../../../connexion/connexion.php');

  if (isset($_GET['idsup']) && !empty($_GET['idsup'])) {
    $numplace=$_GET['idsup'];
    $supprimer=1;
    $req=$connexion->prepare("UPDATE place SET supprimer=? WHERE numplace=?");
    $resultat=$req->execute([$supprimer,$numplace]);
    #Si oui, la variable resultat va retourée true, donc il y a eu une modification
    if($resultat==true){
      $_SESSION['msg']= "Suppression réussi";//Cette ligne permet d'ajouter un message dans la session Lors qu'il y a eu un enregistrement
      header("location:../../views/place.php");
    }
    else{
        $_SESSION['msg']= "Echec de Suppression";//Cette ligne permet d'ajouter un message dans la session Lors qu'il n'y a aucune modification
        header("location:../../views/place.php");
    }
  }
  else{
    header("location:../../views/place.php");
  }