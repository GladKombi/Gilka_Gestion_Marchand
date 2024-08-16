<?php
    #Cette ligne permet d'étabir la connexion à la base de données
    include('../../../connexion/connexion.php');
    if(isset($_POST['valider'])){
        $bloc=htmlspecialchars($_POST['bloc']);
       $type=htmlspecialchars($_POST['type']);
       $montant=htmlspecialchars($_POST['montant']);
        //Insertion data from database
        if (is_numeric($montant)) {
        $req=$connexion->prepare("INSERT INTO typepaiement (`bloc`, `nomtype`, `montant`) values (?,?,?)");
        $resultat=$req->execute([$bloc,$type,$montant]);//Il faut  stocker la requette dans la variable qui s'appel resultat, pour qu'on sache que la requette a été exequitée ou pas

        #Si oui, la variable resultat va retourée true, donc il y a eu un enregistrement
        if($resultat==true){
            $_SESSION['msg']= "Enreigistrement réussie";//Cette ligne permet d'ajouter un message dans la session Lors qu'il y a eu un enregistrement
            header("location:../../views/type.php");
        }
        else{
            $_SESSION['msg']= "Echec d'enreigistrement";//Cette ligne permet d'ajouter un message dans la session Lors qu'il n'y a aucun enregistrement
            header("location:../../views/type.php");
        }
    } else {
        $_SESSION['msg'] = "Le montant ne doit pas être une chaîne de caractère";
        header("location:../../views/type.php");
    }
    }else{
        //Cette ligne permet de rediriger l'utiliseteur lors qu'il a pas cliquer sur le button qui sert à enregistrer
        header("location:../../pages/views/type.php");
    }
 