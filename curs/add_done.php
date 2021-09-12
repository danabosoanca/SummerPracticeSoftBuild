<?php
include("conectare.php");

if (mysqli_query($conn, "insert into produse (denumire_produs, id_raion) 
					 values ('".$_POST["denumire_produs"]."','".$_POST["id_raion"]."')"))
	$_SESSION["adaugat"]=1;
					 
header("Location:index.php");				 
?>