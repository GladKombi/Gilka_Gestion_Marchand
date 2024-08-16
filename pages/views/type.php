<?php 
    include '../../connexion/connexion.php';//Se connecter à la BD
    #Appel de la page qui permet de faire les affichages
    require_once('../models/select/sel-type.php');
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bloc</title>
  <?php require_once ('style.php') ?>
</head>

<body>
  <?php require_once ('aside.php') ?>

  <!-- partial:../../partials/_navbar.html -->

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><?=$title?></h4>
              <p class="card-description">
                Veillez remplir tout les champs
              </p>
               <!-- pour afficher les massage  -->
               <?php
                if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
                    ?><div class="alert-info alert text-center alert-dismissible fade show" role="alert">
                    <?=$_SESSION['msg']?>
                </div><?php
                }
                unset($_SESSION['msg']);#Cette ligne permet de vider la valeur qui se trouve dans la session message
            ?>
              <form class="forms-sample" action="<?=$url?>" method="POST">
              <div class="form-group">
                  <label for="exampleInputName1">Type de paiement</label>
                  <input type="text" class="form-control" name="type" id="exampleInputName1" placeholder="Entrer le type"  <?php if (isset($_GET['idtype'])) { ?> value="<?php echo $tab['nomtype']; ?> <?php }?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Montant</label>
                  <input type="text" class="form-control" name="montant" id="exampleInputName1" placeholder="Entrer le Montant"  <?php if (isset($_GET['idtype'])) { ?> value="<?php echo $tab['montant']; ?> <?php }?>">
                </div>
              <div class="form-group">
              <label for="exampleSelectGender">Bloc</label>
                                <select required id="" name="bloc" autocomplete="off" class="form-control" id="exampleSelectGender"
                                value="<?php echo $tab['designation']; ?> ">
                                <?php 
                        $req=$connexion->prepare("SELECT * from bloc where supprimer=0");
                        $req->execute();
                        while($bloc=$req->fetch()){ 
                            $id=$bloc['id'];     
                            ?>
                             <?php if (isset($_GET['idtype'])) { ?>
                                <option <?php if($id==$tab['bloc']) {?> selected value="<?php echo $bloc['id']; ?>"><?php echo  $bloc['designation']; ?><?php } else { ?> value="<?php echo $bloc['id']; ?>"><?php echo  $bloc['designation'];} ?></option>

                             <?php } else {?>  

                        <option value="<?php echo $bloc['id']; ?>"><?php echo  $bloc['designation']; ?></option>
                        <?php }?>
                        <?php 

                            }

                            ?>
                                </select>
                </div>
                
                  <div
                     class="col-xl-12 col-lg-12 col-md-12 mt-10 col-sm-12 p-3 aling-center">
                     <input type="submit" class="btn btn-primary mr-2" name="valider" value="<?=$btn?>">
                  </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Affichage</h4>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th># </th>
                      <th>Bloc</th>
                      <th>Type</th>
                      <th>Montant</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                                $n=0;
                                while($type=$getData->fetch()){
                                $n++;
                                ?>
                    <tr>
                    <th scope="row"><?= $n;?></th>
                    <td> <?= $type["designation"] ?></td>
                    <td><?= $type["nomtype"] ?></td>
                    <td><?= $type["montant"] ?></td>
                      <td>
                      <a href='type.php?idtype=<?=$type['id'] ?>' class="btn btn-success btn-sm ">Modifier</a>
                      <a onclick=" return confirm('Voulez-vous vraiment supprimer ?')" href='../models/delete/del-type.php?idsup=<?=$type['id'] ?>' class="btn btn-dark btn-sm ">Supprimer</a>
                      </td>
                    </tr>
                    <?php
                                }
                            ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php require_once ('script.php') ?>
</body>

</html>