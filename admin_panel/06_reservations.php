<?php
session_start();
//include ('include/connexion.php');//connexion a BD
include ('../10_config.php');
ob_start(); ?>


<?php include("pages_commun/dropdown.php"); ?>

<?php include("pages_commun/sidebar.php"); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">


    <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="code.php" method="POST">

            <div class="modal-body">

              
              <div class="form-group">
                <label>ID</label>
                <input type="text" name="text" class="form-control" placeholder="Saisissez l'ID">
              </div>
              <div class="form-group">
                <label>Suite</label>
                <input type="text" name="text" class="form-control" placeholder="Saisissez le nom de la suite">
              </div>
              <div class="form-group">
                <label> Nom d'utilisateur </label>
                <input type="text" name="Saisissez un nom" class="form-control" placeholder="Saisissez un nom">
              </div>
              <div class="form-group">
                <label>Date du</label>
                <input type="text" name="text" class="form-control" placeholder="Saisissez une date d'entrée">
              </div>
              <div class="form-group">
                <label>Au</label>
                <input type="text" name="text" class="form-control" placeholder="Saisissez une date de sortie">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              <button type="submit" name="registerbtn" class="btn btn-primary">Enregistrer</button>
            </div>
          </form>

        </div>
      </div>
    </div>


    <div class="container-fluid">

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Ajouter une réservation
            </button>
          </h6>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID </th>
                  <th>Suites</th>
                  <th>Nom</th>
                  <th>Date du</th>
                  <th>Au</th>
                </tr>
              </thead>
              <tbody>


                <tr>
                  <td> 411001 </td>
                  <th>Deluxe </th>
                  <td>ELIANE ELIAS</td>
                  <td>07/05/2021</td>
                  <td>10/05/2021</td>

                <tr>
                  <td> 411002 </td>
                  <th>Royal </th>
                  <td>NATHALIE WOOD</td>
                  <td>01/02/2022</td>
                  <td>05/02/2022</td>

                <tr>
                  <td> 411003 </td>
                  <th>Ultima </th>
                  <td>PRINC ANTHONY</td>
                  <td>24/03/2022</td>
                  <td>06/03/2022</td>

              </tbody>
            </table>

          </div>
        </div>
      </div>

    </div>


    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("pages_commun/footer.php"); ?>


<?php ob_end_flush(); ?>