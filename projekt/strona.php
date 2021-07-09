<?php
session_start();
     
if (!isset($_SESSION['zalogowany']))
{
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>strona</title>
</head>
 
<body>
 
    
     
</body>
</html>