<?php
$host = 'localhost'; //'127.0.0.1'; 
$dbname = 'admin_panel';
$username = 'root';
$password = 'admin';
$charset = 'utf8';
//$collate = 'utf8_unicode_ci';
//$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
//$dsn = new PDO ("mysql:host=localhost;dbname=admin_panel;charset=utf8", "root", "admin");
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
];
try {
    $connexion = new PDO($dsn, $username, $password, $options);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'erreur de connexion: ' . $e->getMessage();
    exit;
}
?>

<?php ob_end_flush(); ?>