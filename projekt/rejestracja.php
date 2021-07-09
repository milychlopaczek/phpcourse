<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Logowanie</title>
</head>
 
<body>
 
    <!--<h1>witam na stronie</h1>*/-->
    <form action="strona.php" method="post"> 
        Login: 
        <input type="text" name="login" />  
            <br><br>
        Hasło: 
        <input type="password" name="haslo" />
            <br><br>
        Potwierdź Hasło:
        <input type="password" name="haslo2"/>
            <br><br>
        E-mail:
        <input type="text" name="email"/>
            <br><br>
        <input type="submit" value="zarejestruj się" >

            <?php
        echo "phpphphph";
        ?>
    </form>
</body>
</html>