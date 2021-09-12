<?php
//session - in session, punem un array cu care ne plimbam pe toate paginile
//post - e tot un array, dar punem in el ce primim de la formular
include("conectare.php");


if(mysqli_query($conn,"insert into bucatari (nume,varsta,id_scoala,experienta,stele)
                    values('".$_POST["nume"]."','".$_POST["varsta"]."','".$_POST["id_scoala"]."','".$_POST["experienta"]."','".$_POST["stele"]."')"));



header("Location:index.php");
?>
