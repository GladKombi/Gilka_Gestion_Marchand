<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceuil</title>
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
              <h4 class="card-title">Enregistrement Utilisateur</h4>
              <p class="card-description">
                Veillez remplir tout les champs
              </p>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputName1">Nom</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le noms">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3"> Postnom</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Postnom">
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">email</label>
                  <input type="mail" class="form-control" id="exampleInputCity1" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                </div>
                <div class="form-group">
                  <label>Profil</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Télecharger</button>
                    </span>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Valider</button>
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
                      <th>Noms</th>
                      <th>Genre</th>
                      <th>Adresse</th>
                      <th>Num Télephone</th>
                      <th>profil</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Kahindo Muyisa Seraphine</td>
                      <td>Fille</td>
                      <td>Lusando</td>
                      <td>0083737377</td>
                      <td>modifier</td>
                      <td>
                      <a href='' class="btn btn-success btn-sm "><i class="mdi mdi-box-cutter"></i></i></a>
                      <a href='' class="btn btn-dark btn-sm "><i class="mdi mdi-archive"></i></a>
                      </td>
                    </tr>
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