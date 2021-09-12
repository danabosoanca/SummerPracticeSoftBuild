<?php
include("conectare.php");

$bucatari=mysqli_query($conn,"select b.*, s.nume_scoala
                                from bucatari b
                                left join scoli_bucatari s on b.id_scoala=s.id_scoala");


?>

<html>
	<head>
		<title>Bucatari</title>
	</head>
	
	<body>
		<h1>Lista bucatari</h1>
		<?php
			if (isset($_SESSION["adaugat"]) && $_SESSION["adaugat"]==1){
				echo "<p>Succes!</p>";
				$_SESSION["adaugat"]=0;
			}
		?>
		<a href="add.php">Adauga bucatar  in bd</a>
		<ul type="circle">
			<?php
				while($row=mysqli_fetch_array($bucatari)){
			?>
				<li>
					<table width="500px">
						<tr>
							<td><?=$row["nume"]." (Scoala: ".$row["nume_scoala"].")";?></td>
							
							<td><a href="edit.php?id_bucatar=<?=$row["id_bucatar"]?>">Modificare</a></td>

							<td><a href="delete.php?id_bucatar=<?=$row["id_bucatar"]?>" onclick="return confirm('Sunteti sigur ca doriti sa stergeti?')">Stergere</a></td>
						
						</tr>
					</table>
				</li>
			<?php }
			?>
		</ul>
	</body>
</html>
