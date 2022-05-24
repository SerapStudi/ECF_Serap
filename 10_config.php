
<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=admin_panel;charset=utf8", "root", "admin");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
