<?php  
include('../../../connexion/connexion.php');

if(isset($_POST['valider']) && !empty($_GET['idbloc'])){
    $id=$_GET['idbloc'];
    $bloc=htmlspecialchars($_POST['bloc']);

    //requete de modification
    $req=$connexion->prepare("UPDATE bloc set designation=? where id=?");
    $exe=$req->execute([$bloc,$id]);
    if($exe==true){
        $_SESSION['msg']="Modification réussie";
        header('location:../../views/bloc.php');
    }else{
        $_SESSION['msg']="Echec";
        header("location:../../views/bloc.php");
    }

}

?>