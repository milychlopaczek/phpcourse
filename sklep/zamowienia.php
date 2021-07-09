<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Podsumowanie zamówienia</title>
</head>
 
<body>
 
<?php 
      
    $ilb = $_POST['batoniki'];
    $ild = $_POST['lody'];   
    $suma = 1.99 * $ilb + 2.39 * $ild;
     
echo<<<END
 
    <h2>Podsumowanie zamówienia</h2>
     
    <table border="1" cellpadding="10" cellspacing="10">
    <tr>
        <td>Batonik (1.99PLN/szt)</td> <td>$ilb</td>
    </tr>
    <tr>
        <td>Lód (2.39PLN/szt)</td> <td>$ild</td>
    </tr>
    <tr>
        <td>SUMA</td> <td>$suma PLN</td>
    </tr> 
    </table>
    <h3>

 
END;
 
?>
<a href="https://www.paypal.com/">
         <b> <p style="color:#FF0000";> Kup teraz </p> </b>
         <img alt="koszyk" src="https://cdn.pixabay.com/photo/2012/04/24/13/16/cart-40016_960_720.png"
         width=100" height="50">
      </a>
<?php
echo "<br /><a href='strona.php'>Powrót do strony głównej</a>"
?>
</body>
</html>
