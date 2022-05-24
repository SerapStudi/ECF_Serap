<?php include ('10_config.php');?>


<?php 
$page = 'contact';
include("include/header.php"); 
?>


<!-- slider_area_start -->

<main>

    <article>
        <div class="formulaire2">
            <div class="contactez-nous">
                <h1>Contactez-nous</h1>
                <p>Pour avoir plus d'information avant de réserver une suite, ou commander un service non iclus, n’hésitez pas à utiliser ce formulaire de contact !</p>
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
                     <label for="sujet" class="form-control">Quel est le sujet de votre message ?</label>  
                        <select name="sujet" class="form-control" id="sujet" required>
                            <option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
                            <option value="reclamation">Je souhaite poser une réclamation</option>
                            <option value="question-service">Je souhaite commander un service supplémentaire</option>
                            <option value="infos-suite">Je souhaite en savoir plus sur une suite</option>
                            <option value="probleme-application">J'ai un souci avec cette application</option>
                        </select>
                    </div>
                    <div>
                        <label for="message">Votre message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Bonjour, je vous contacte car...." required></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block" type="submit" >Envoyer mon message</button>
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

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </article>



             


    <!-- footer -->

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                <img src="img/logo/Logo-hypnose.svg" alt="footer-logo">
                                </a>
                            </div>
                            <p> <br> LE GROUPE HOTELIER <br>
                                <a href="#">+33148474020</a> <br>
                                <a href="#">contact@hypnos.com</a>
                            </p>


                            <?php include("include/footer.php"); ?>