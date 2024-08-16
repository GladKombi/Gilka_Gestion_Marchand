<?php  
include('../../../connexion/connexion.php');

if(isset($_POST['valider']) && !empty($_GET['idbloc'])){
    $numplace=$_GET['idbloc'];
    $bloc=htmlspecialchars($_POST['bloc']);

    //requete de modification
    $req=$connexion->prepare("UPDATE place set bloc=? where numplace=?");
    $exe=$req->execute([$bloc,$numplace]);
    if($exe==true){
        $_SESSION['msg']="Modification réussie";
        header('location:../../views/place.php');
    }else{
        $_SESSION['msg']="Echec";
        header("location:../../views/place.php");
    }

}

?>