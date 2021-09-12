<?php
include("conectare.php");
$raioane=mysqli_query($conn,"select * from raioane");
$produs_obj=mysqli_query($conn,"select * from produse where id_produs='".$_GET["id_produs"]."'");
$produs=mysqli_fetch_array($produs_obj);

// echo "<pre>";
// print_r($produs);

// $rr=$raioane;
// while($rai=mysqli_fetch_array($rr))
// print_r($rai);
// exit;

?>
<html>
	<head>
		<title>Modificare produs</title>
	</head>
	
	<body>
		<h1>Modifica produs <?=$produs["denumire_produs"] ?></h1>
		
		<form action="edit_done.php" method="post">
			<input type="hidden" name="id_produs" value="<?=$produs["id_produs"];?>" />
			<table border="0">
				<tr>
					<td>Denumire produs</td>
					<td><input type="text" name="denumire_produs" value="<?=$produs["denumire_produs"] ?>"></td>
				</tr>
				<tr>
					<td>Raion</td>
					<td>
						<select name="id_raion">
							<?php 	
							while($row=mysqli_fetch_array($raioane)){
							?>
								<option value="<?=$row["id_raion"];?>" <?php
									if($produs["id_raion"]==$row["id_raion"]) echo 'selected="selected"';
								?>><?=$row["denumire_raion"]?></option>
							<?php
							}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan=2><input type="submit"</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>