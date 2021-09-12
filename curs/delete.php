<?php
include("conectare.php");

if (mysqli_query($conn, "delete from  produse where id_produs='".$_GET["id_produs"]."'"))
	$_SESSION["adaugat"]=1;
					 
header("Location:index.php");				 
?>