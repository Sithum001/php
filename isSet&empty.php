<?php
//isset()=returns true if a variable is declared and not null
//empty()=returns true if a variable is not declared ,flase ,null ,"" 
$name="";

if(isset($name)){
echo"variable is is set";
}
else{
    echo"varible not set";
}

if(empty($name)){
    echo"varable is empty";
}
else{
    echo"varible is empty";
}
?>    