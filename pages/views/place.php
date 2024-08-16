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
              <h4 class="card-title">Enregistrement Etallage</h4>
              <p class="card-description">
                Veillez remplir tout les champs
              </p>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputName1">Nom de l'etallage</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le nom">
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
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Kahindo Muyisa Seraphine</td>
                      <td>Fille</td>
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