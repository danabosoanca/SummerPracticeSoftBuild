<?php
//phpinfo();
$a=1;
$b="aaaa";

echo $a.$b; //concatenare 
// + ia numai valoarea lui a, deoarece, numeric, aaa are valoarea 0 => afiseaza 1
//
/*
*/
// operatori  + - * / . %
// % folosit la paginari, foarte mult

//metode de declarare
$array=array();
$array[1]="lol";
$array[7]="a";
$arr=array(1,4,5);
$array[]=$arr;
$array["tot"]="25 ani";

echo"<pre>";
print_r($array);


if ($arr[0]<$arr[1]) echo $arr[2];
else echo sizeof($arr);

echo "</pre><br/>";
for($i=0;$i<sizeof($arr);$i++){
    echo $arr[$i];
    ?>
    <hr/>
    <?php
}

foreach ($array as $element){
    if(!is_array($element)) 
        echo $element;
    else print_r($element);
    ?>
    <hr/>
    <?php
}

while($i<sizeof($arr)){
    echo $arr[$i]." ";
}




?>