<?php  
include('../../../connexion/connexion.php');

if(isset($_POST['valider']) && !empty($_GET['idtype'])){
    $id=$_GET['idtype'];
    $bloc=htmlspecialchars($_POST['bloc']);
    $type=htmlspecialchars($_POST['type']);
    $montant=htmlspecialchars($_POST['montant']);

    //requete de modification
    if (is_numeric($montant)) {
    $req=$connexion->prepare("UPDATE typepaiement set bloc=?, nomtype=?, montant=? where id=?");
    $exe=$req->execute([$bloc,$type,$montant,$id]);
    if($exe==true){
        $_SESSION['msg']="Modification réussie";
        header('location:../../views/type.php');
    }
} else {
    $_SESSION['msg'] = "Le montant ne doit pas être une chaîne de caractère";
    header("location:../../views/type.php");
}
}else{
    $_SESSION['msg']="Echec";
    header("location:../../views/type.php");
}

?>