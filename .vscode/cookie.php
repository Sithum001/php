<?php
/*
cookie =information about a user stored in a user's web-browser targeted advertisement ,browser preferences and other non sensitive data

f-12 -> applications to view cookies
*/

setcookie("fav_food","pizza",time()+(86400*2),"/");//fotr delete cookie set time to (-0)
setcookie("fav_food","pizza",time()+(86400*2),"/");
setcookie("fav_food","pizza",time()+(86400*2),"/");
/*
foreach($_COOKIE as $key => $value){
echo"{$key}={$value} <br>";

}
*/
if(isset($_COOKIE["fav_food"])){
    echo"buy some {$_COOKIE["fav_food"]}";
}
else
echo" I dont know your favrit food";
?>