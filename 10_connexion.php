<?php 
    session_start(); // Démarrage de la session
    //require_once '10_config.php'; // On inclut la connexion à la base de données
    require_once '10_config.php';



    if(!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); // email transformé en minuscule
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
       $check = $bdd->prepare('SELECT  email, mot_de_passe   FROM utilisateurs WHERE email = ?');
       $check->execute(array($email));
       $pass_hache = sha1($_POST['pass']);
    $data = $check->fetch();
       $row = $check->rowCount();
        
        

        // Si > à 1 alors l'utilisateur existe
        if($row > 1)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {

                // Si le mot de passe est le bon
              
                if(password_verify($password, $data['password']))
                {
                    // On créer la session et on redirige sur landing.php
                    $_SESSION['user'] = $data['nom'];
                    header('Location: 10_landing.php');
                    die();
                }else{ header('Location: 10_index.php?login_err=password'); die(); }
            }else{ header('Location: 10_index.php?login_err=email'); die(); }
        }else{ header('Location: 10_index.php?login_err=already'); die(); }
    }else{ header('Location: 10_index.php'); die();} // si le formulaire est envoyé sans aucune données
