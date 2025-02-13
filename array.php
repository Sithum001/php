<?php
$foods=array("apple","orange","banana","coconut");
//add new element to idex 0
$foods[0]="pineapple";
//add new element to end of array
array_push($foods,"pineapple","kiwi");
//remove last element from array
array_pop($foods);
//remove first element of array
Array_shift($foods);
//reverse array
$foods=array_reverse($foods);

foreach($foods as $food){
    echo $food."<br>";
}
?>