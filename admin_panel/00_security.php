<?php
session_start();
include('include/connexion.php');

if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: include/connexion.php");
}
?>