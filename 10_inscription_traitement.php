<?php 
    require_once '10_config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['mot_de_passe']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['mot_de_passe']);
        $password_retype = htmlspecialchars($_POST['retapez_le_mot_de_passe']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT nom, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $pass_hache = sha1($_POST['mot_de_passe']);
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($nom) <= 100){ // On verifie que la longueur du nom <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            // On stock l'adresse IP
                            $ip = $_SERVER['REMOTE_ADDR']; 
                             /*
                              ATTENTION
                              Verifiez bien que le champs token est présent dans votre table utilisateurs, il a été rajouté APRÈS la vidéo
                              le .sql est dispo pensez à l'importer ! 
                              ATTENTION
                            */
                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO utilisateurs(nom, email, mot_de_passe, ip) VALUES(:nom, :email, :password, :ip, :token)');
                            $insert->execute(array(
                                'nom' => $nom,
                                'email' => $email,
                                'mot_de_passe' => $password,
                                'ip' => $ip,
                            /*    'token' => bin2hex(openssl_random_nom_bytes(64))*/
                            ));
                            // On redirige avec le message de succès
                            header('Location:10_inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: 10_inscription.php?reg_err=password'); die();}
                    }else{ header('Location: 10_inscription.php?reg_err=email'); die();}
                }else{ header('Location: 10_inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: 10_inscription.php?reg_err=nom_length'); die();}
        }else{ header('Location: 10_inscription.php?reg_err=already'); die();}
    }
