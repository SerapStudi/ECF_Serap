
<?php
include("10_config.php");
?>

<?php 
$page = 'contact';
include("include/header.php"); 
?>




<main>

    <article>
        <div class="formulaire3">
            <div class="contactez-nous">
            <h1>Formulaire de réservation</h1>
                <form action="/page-traitement-donnees" method="post">
                    <div>


                        <label for="nom">Votre nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" required>
                    </div>
                    <div>
                        <label for="nom">Votre prénom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre prénom" required>
                    </div>
                    <div>
                        <label for="email">Votre e-mail</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="monadresse@mail.com" required>
                    </div>
                    <div>
                        <label for="email">Date d'entrée</label>
                        <input type="date" id="date" name="date" class="form-control" placeholder="Date d'entrée" required>
                    </div>
                    <div>
                        <label for="email">Date de sortie</label>
                        <input type="date" id="date" name="date" class="form-control" placeholder="Date de sortie" required>
                    </div>
                    <div>

           
                        <select name="sujet" class="form-control" id="sujet" required>
                          <option value="établissement" disabled selected hidden>Veuillez choisir votre établissement</option>
                            <option value="Elegance - Paris">Elegance - Paris</option>
                            <option value="Royal - Cannes">Royal - Cannes</option>
                            <option value="Luxury - Saint-Malo">Luxury - Saint-Malo</option>
                            <option value="King - Dieppe">King - Dieppe</option>
                            <option value="Imperial - Sète">Imperial - Sète</option>
                            <option value="Elysia - Cassis">Elysia - Cassis</option>
                            <option value="Hilton - Caen">Hilton - Caen</option>
                        </select>


                        
                        <select name="sujet" class="form-control" id="sujet" required>
                          <option value="suite" disabled selected hidden>Veuillez choisir votre suite</option>
                            <option value="Suite ULTIMA">Suite ULTIMA</option>
                            <option value="Suite DREAMS">Suite DREAMS</option>
                            <option value="Suite ATLANTIS">Suite ATLANTIS</option>
                            <option value="Suite ELEGANT">Suite ELEGANT</option>
                            <option value="Suite INFINITY">Suite INFINITY</option>
                            <option value="Suite DELUXE">Suite DELUXE</option>
                            <option value="Suite ROYAL">Suite ROYAL</option>
                        </select>
                    </div>
                
                        <button class="btn btn-primary btn-block" type="submit" >Réserver maintenant</button>
                        
      
                        <script type="text/javascript" src="js/sweetalert.min.js"></script>
                                    <?php

                                    if ($_POST) {

                                        $enregistre = $connexion->prepare("INSERT INTO contact SET nom=:nom, prenom=:prenom, email=:email, sujet=:sujet,message=:message");
                                        $insert = $enregistre->execute(array(
                                            'nom' => htmlspecialchars($_POST['nom']),
                                            'prenom' => htmlspecialchars($_POST['prenom']),
                                            'email' => htmlspecialchars($_POST['email']),
                                            'sujet' => htmlspecialchars($_POST['sujet']),
                                            'message' => htmlspecialchars($_POST['message']),
                                        ));
                                        if ($insert) {

                                            echo '<script>swal("Reussi", "votre message a été envoyé avec","succès");</script>';
                                        } else {
                                            echo '<script>swal("Erreur","Réessayer plus tard","error");</script>';
                                        }
                                    }

                                    ?>
     

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </article>
</main>



             


    <!-- footer -->

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                <img src="img/logo/Logo - hypnose.svg" alt="footer-logo">
                                </a>
                            </div>
                            <p> <br> LE GROUPE HOTELIER <br>
                                <a href="#">+33148474020</a> <br>
                                <a href="#">contact@hypnos.com</a>
                            </p>


                            <?php include("include/footer.php"); ?>