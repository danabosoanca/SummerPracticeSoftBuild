<?php

$array=array();
$array[1]="lol";
$array[7]="a";
$arr=array(1,4,5);
$array[]=$arr;
$array["tot"]="25 ani";

function printArray($array){
    foreach ($array as $element){
    if(!is_array($element)) {
        echo $element;
        ?>
        <hr/>
        <?php
    }
    else printArray($element);
    
}

}

printArray($array);
?>