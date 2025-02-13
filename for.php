<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
      <label for="">Input count</label>
      <input type="text" name="count"><br>
      <input type="submit" value="start">
    </form>

</body>
</html>

<?php
    $counter=$_post["counter"];
    for($i = 0;$i<=$counter;$i++){
        echo $i."<br>";
    } 
    
    ?>