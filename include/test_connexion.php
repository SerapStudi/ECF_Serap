<?php
$bdd = new PDO('mysql:host=localhost;dbname=admin_panel', 'root', 'admin');
?>

<?php
try
{
       $bdd = new PDO('mysql:host=localhost;dbname=admin_panel', 'root', 'admin');
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}
?>

