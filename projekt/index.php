<?php
session_start();
     
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
    header('Location: strona.php');
    exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Logowanie</title>
</head>
 
<body>
 
    <!--<h1>witam na stronie</h1>*/-->
    <form action="logowanie.php" method="post"> 
        Login: 
        <input type="text" name="login" />  
            <br /><br />
        Hasło: 
        <input type="password" name="haslo" />
            <br /><br />
        <input type="submit" value="zaloguj się" >
    </form>
    <form action="rejestracja.php" method="post">
        <input type="submit" value="zarejestruj się" />
    </form>
</body>
</html>