<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
        <input type="radio"  name="credit_card" value="visa">
        Visa <br>
        <input type="radio" name="credit_card"  value="mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card"  value="american express">
        American Express<br>
        <input type="submit" name="confirm"   value="confirm">  

    </form>
</body>
</html>

<?php

if(isset($_POST["confirm"])){
    $credit_card = $_POST["credit_card"];   
     echo$credit_card;
}

?>