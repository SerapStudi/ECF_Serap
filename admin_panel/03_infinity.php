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
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>HÔTEL INFINITY</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
        <!--      <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
        <section class="content">


          <!-- /.card-header -->
          <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Titre</th>
                    <th>Adresse</th>
                    <th>Suite</th>
                    <th>Disponibilités</th>
                    <th>Ajouter</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
            
                  

                  <td>Impérial</td>
                    <td>Sète</td>
                    <td>Infinity</td>
                    <td>4 suites</td>
                    <td>
                    
                    <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn bg-indigo"> AJOUTER</button>
                </form>
            </td>
          
       
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
              
            
                  </tfoot>
                </table>
              </div> 
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>












  <!-- /.card-body -->
  <div class="card-footer">
    Footer
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