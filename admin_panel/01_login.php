<?php
session_start();
//include ('include/connexion.php');//connexion a BD
include ('../10_config.php');
ob_start(); ?>


<?php include("pages_commun/dropdown.php"); ?>
<?php include("pages_commun/sidebar.php"); ?>

<?php
//si la cession existe nous transferons vers la page
if (isset($_SESSION["cession"]) && $_SESSION["cession"] == "6789") {
    header("location:index.php");
} //Si remember me est coché nous allons vers la page d'index
else if (isset($_COOKIE["cookies"])) {
    //requete des noms d'utilisateurs

    $requete = $connexion->prepare("select nom from utilisateurs");
    $requete->execute();


    //Nous obtenons les noms d'utilisateur un par un à l'aide de la boucle
    while ($resultat = $requete->fetch()) {
        //Nous cherchons à voir s'il existe un utilisateur adapté à la structure que nous avons déterminée..
        if ($_COOKIE["cookies"] == md5("aa" . $resultat['nom_utilisateurs'] . "bb")) {

            //valeurs de création de session ici pour des raisons de sécurité
            //J'ai aussi gardé le nom d'utilisateur ici
            $_SESSION["cession"] = "6789";
            $_SESSION["nom_utilisateurs"] = $resultat['nom_utilisateurs'];

            // je redirige vers la page d'index
            header("location:index.php");
        }
    }
}
//Nous vérifions si le formulaire de connexion a été rempli
if ($_POST) {
    $txtuNom= $_POST["txtNoms"]; //J'ai attribué le nom d'utilisateur à la variable
    $txtMdp = $_POST["txtMdp"]; //j'ai attribué le mot de passe à la variable
}
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Page de connexion</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
     


  <div class="login-box">
<div class="card-body">
      <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

      <form action="01_login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Se souvenir de moi
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">S'identifier</button>
            <script type="text/javascript" src="js/sweetalert.min.js"></script>
                                    
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->








<?php include("pages_commun/footer.php"); ?>


<?php ob_end_flush(); ?>