<?php 
    include '../../connexion/connexion.php';//Se connecter à la BD
    #Appel de la page qui permet de faire les affichages
    require_once('../models/select/sel-bloc.php');
   
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
                  <label for="exampleInputName1">Nom du bloc</label>
                  <input type="text" class="form-control" name="bloc" id="exampleInputName1" placeholder="Entrer le nom du bloc"  <?php if (isset($_GET['idbloc'])) { ?> value="<?php echo $tab['designation']; ?> <?php }?>">
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
                      <th>Nom</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                                $n=0;
                                while($bloc=$getData->fetch()){
                                $n++;
                                ?>
                    <tr>
                    <th scope="row"><?= $n;?></th>
                    <td> <?= $bloc["designation"] ?></td>
                      <td>
                      <a href='bloc.php?idbloc=<?=$bloc['id'] ?>' class="btn btn-success btn-sm "><i class="mdi mdi-box-cutter">Modifier</a>
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