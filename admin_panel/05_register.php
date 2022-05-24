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
            <h5 class="modal-title" id="exampleModalLabel">Ajouter un utilisateur</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="code.php" method="POST">

            <div class="modal-body">

              <div class="form-group">
                <label> ID </label>
                <input type="text" name="Saisissez le ID" class="form-control" placeholder="Saisissez le ID">
              </div>
              <div class="form-group">
                <label> Fonction </label>
                <input type="text" name="Saisissez la fonction" class="form-control" placeholder="Saisissez la fonction">
              </div>
              <div class="form-group">
                <label> Nom d'utilisateur </label>
                <input type="text" name="Saisissez votre nom" class="form-control" placeholder="Saisissez votre nom">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Saisissez votre Email">
              </div>
              <div class="form-group">
                <label>Mot de passe</label>
                <input type="mot_de_passe" name="mot de passe" class="form-control" placeholder="Saisissez votre mot de passe">
              </div>
              <div class="form-group">
                <label>Confirmez le mot de passe</label>
                <input type="password" name="Confirmezlemotdepasse" class="form-control" placeholder="Confirmez le mot de passe">
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
              Ajouter un profil d'utilisateur
            </button>
          </h6>
        </div>

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID </th>
                  <th>Fonction </th>
                  <th>Nom</th>
                  <th>Email </th>
                  <th>Mot de passe</th>
                  <th>Modifier </th>
                  <th>Supprimer </th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td> 00255 </td>
                  <th>Admin </th>
                  <td>CELINE DIOR</td>
                  <td> celine.dior@gmail.com</td>
                  <td> Groupe*Hotelier385478</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>

                <tr>
                  <td> 01 </td>
                  <th>Gérant </th>
                  <td>ROSSI JEAN</td>
                  <td>rossi.jean@gmail.com</td>
                  <td>GroupeHotelier*220407</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>

                <tr>
                  <td> 02 </td>
                  <th>Gérant </th>
                  <td>MORET PHILIPPE</td>
                  <td>moret.philippe@gmail.com</td>
                  <td>Groupe*Hotelier58992022</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>


                <tr>
                  <td> 03 </td>
                  <th>Gérant </th>
                  <td>HIDELOT CHRISTINE</td>
                  <td>hidelot.christine@gmail.com</td>
                  <td>GroupeHotelier248963@</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>


                <tr>
                  <td>04</td>
                  <th>Gérant </th>
                  <td>BEAUVAIS THIERRY</td>
                  <td>beauvais.thierry@gmail.com</td>
                  <td>GroupeHotelier@590231</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>


                <tr>
                  <td> 05 </td>
                  <th>Gérant </th>
                  <td>GIRARD CHRISTOPHE</td>
                  <td>girard.christophe@gmail.com</td>
                  <td>GroupeHotelier283214*</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>


                <tr>
                  <td> 06 </td>
                  <th>Gérant </th>
                  <td>SOPHIE BASSES</td>
                  <td>basses.sophie@gmail.com</td>
                  <td>GroupeHotelier283214*</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>

                <tr>
                  <td> 07 </td>
                  <th>Gérant </th>
                  <td>FRANCOIS JEAN</td>
                  <td>francois.jean@gmail.com</td>
                  <td>GroupeHotelier*681254</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>


                <tr>
                  <td> 411001 </td>
                  <th>Client </th>
                  <td>ELIANE ELIAS</td>
                  <td>eliane.elias@gmail.com</td>
                  <td>ElianeElias*2022</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>


                <tr>
                  <td> 411002 </td>
                  <th>Client </th>
                  <td>NATHALIE WOOD</td>
                  <td>wood.nathalie@gmail.com</td>
                  <td>NathalieWood*2022</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>


                <tr>
                  <td> 411003 </td>
                  <th>Client </th>
                  <td>PRINC ANTHONY</td>
                  <td>princ.anthony@gmail.com</td>
                  <td>PrincAnthony*2022</td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="edit_id" value="">
                      <button type="submit" name="edit_btn" class="btn btn-success"> MODIFIER</button>
                    </form>
                  </td>
                  <td>
                    <form action="" method="post">
                      <input type="hidden" name="delete_id" value="">
                      <button type="submit" name="delete_btn" class="btn btn-danger"> SUPPRIMER</button>
                    </form>
                  </td>
                </tr>
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