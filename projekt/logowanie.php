<?php
session_start();
     
if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
{
    header('Location: index.php');
    exit();
}
require_once "connect.php";
$conn = new mysqli($dbServername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_errno!=0)
    {
        echo "Error: ".$conn->connect_errno;
    }

?>