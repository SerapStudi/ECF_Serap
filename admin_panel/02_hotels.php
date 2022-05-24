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
            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Hôtel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="code.php" method="POST">

            <div class="modal-body">

              <div class="form-group">
                <label> Titre </label>
                <input type="text" name="nom" class="form-control" placeholder="Saisissez le nom de l'hötel">
              </div>
              <div class="form-group">
                <label>Adresse</label>
                <input type="text" name="adresse" class="form-control" placeholder="Saisissez l'adresse">
              </div>
              <div class="form-group">
                <label>Suite</label>
                <input type="text" name="suite" class="form-control" placeholder="Saisissez le nom de la suite">
              </div>
              <div class="form-group">
                <label>Disponibilités</label>
                <input type="text" name="disponibilite" class="form-control" placeholder="Saisissez la disponibilité">
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
              Ajouter un hôtel
            </button>
          </h6>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Titre</th>
                  <th>Adresse</th>
                  <th>Suite</th>
                  <th>Disponibilités</th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>Elegance</td>
                  <td>Paris</td>
                  <td>Ultima</td>
                  <td>4 suites</td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn bg-orange"> MODIFIER</button>
                    </form>
                  </td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn bg-lime"> SUPPRIMER</button>
                    </form>
                  </td>

                <tr>
                  <td>Royal</td>
                  <td>Cannes</td>
                  <td>Dreams</td>
                  <td>3 suites</td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn bg-orange"> MODIFIER</button>
                    </form>
                  </td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn bg-lime"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>Luxury</td>
                  <td>Saint Malo</td>
                  <td>Atlantis</td>
                  <td>5 suites</td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn bg-orange"> MODIFIER</button>
                    </form>
                  </td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn bg-lime"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>King</td>
                  <td>Dieppe</td>
                  <td>Elegant</td>
                  <td>2 suites</td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn bg-orange"> MODIFIER</button>
                    </form>
                  </td>

                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn bg-lime"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>
                <td>Impérial</td>
                <td>Sète</td>
                <td>Ultima</td>
                <td>4 suites</td>


                <td>
                  <form action="" method="post">
                    <input type="hidden" name="delete_id" value="">
                    <button type="submit" name="delete_btn" class="btn bg-orange"> MODIFIER</button>
                  </form>
                </td>

                <td>
                  <form action="" method="post">
                    <input type="hidden" name="delete_id" value="">
                    <button type="submit" name="delete_btn" class="btn bg-lime"> SUPPRIMER</button>
                  </form>
                </td>
                </tr>
                <td>Elysia</td>
                <td>Cassis</td>
                <td>Deluxe</td>
                <td>2 suites</td>


                <td>
                  <form action="" method="post">
                    <input type="hidden" name="delete_id" value="">
                    <button type="submit" name="delete_btn" class="btn bg-orange"> MODIFIER</button>
                  </form>
                </td>

                <td>
                  <form action="" method="post">
                    <input type="hidden" name="delete_id" value="">
                    <button type="submit" name="delete_btn" class="btn bg-lime"> SUPPRIMER</button>
                  </form>
                </td>
                </tr>
                <td>Hilton</td>
                <td>Caen</td>
                <td>Royal</td>
                <td>4 suites</td>

                <td>
                  <form action="" method="post">
                    <input type="hidden" name="delete_id" value="">
                    <button type="submit" name="delete_btn" class="btn bg-orange"> MODIFIER</button>
                  </form>
                </td>

                <td>
                  <form action="" method="post">
                    <input type="hidden" name="delete_id" value="">
                    <button type="submit" name="delete_btn" class="btn bg-lime"> SUPPRIMER</button>
                  </form>
                </td>
                </tr>
                </tr>
              </tbody>
            </table>
          </div>


          <?php 
if(isset($_POST['enregistrer']))
{
  $nom=$_POST['titre'];
  $nom=$_POST['adresse'];
  $nom=$_POST['suite'];
  $nom=$_POST['disponibilités'];
  $nom=$_POST['fermer'];
  $nom=$_POST['enregistrer'];
}

if(!empty($titre) AND !empty($adresse))
{
echo "veuillez remplir tous les champs";
}
{
  $req=$con ->prepare ("INSERT INTO suites (titre, adresse, suite, disponibilités) VALUES (?, ?, ?)");
  $req->execute(array($titre, $adresse, $suite, $disponibilités));
}
?>


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