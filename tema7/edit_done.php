<?php
include("conectare.php");
if (mysqli_query($conn, "update bucatari
                        SET id_scoala='".$_POST["id_scoala"]."',
                        experienta='".$_POST["experienta"]."',
                        stele='".$_POST["stele"]."'
						where id_bucatar='".$_POST["id_bucatar"]."'"))
	$_SESSION["adaugat"]=1;
                    
    

    if (mysqli_query($conn, "update produse 
						set denumire_produs='".$_POST["denumire_produs"]."',
						id_raion='".$_POST["id_raion"]."'
                        where id_produs='".$_POST["id_produs"]."'"))
                        


header("Location:index.php");				 
?>