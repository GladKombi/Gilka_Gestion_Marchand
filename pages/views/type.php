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
              <h4 class="card-title">Enregistrement Type de paiement</h4>
              <p class="card-description">
                Veillez remplir tout les champs
              </p>
              <form class="forms-sample">
              <div class="form-group">
                  <label for="exampleInputEmail3"> Type de paiemnt</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Numero">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3"> Montant</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Numero">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Bloc</label>
                  <select class="form-control" id="exampleSelectGender">
                    <option>A</option>
                    <option>B</option>
                  </select>
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
                      <th>Marchands</th>
                      <th>Bloc</th>
                      <th>Date</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Kahindo Muyisa Seraphine</td>
                      <td>A</td>
                      <td>20/02/2024</td>
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