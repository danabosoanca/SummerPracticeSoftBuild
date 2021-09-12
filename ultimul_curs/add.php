<?php
include("conectare.php");
$raioane=mysqli_query($conn,"Select * from raioane");

?>

<html>
    <head>
        <title>Adauga produs in lista de cumparaturi</title>
    </head>

    <body>
        <h1>Adaugare produse</h1>
        <form action="add_done.php" method="post">
            <table border="0">
                <tr>
                    <td>Denumire produs</td>
                    <td>
                        <input type="text" name="denumire_produs">
                    </td>
                </tr>

                <tr>
                    <td>Raion</td>
                    <td>
                        <select name="id_raion">
                            <?php
                                while($row=mysqli_fetch_array($raioane)){
                            ?>
                                <option value="<?=$row["id_raion"];?>"><?=$row["denumire_raion"]?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan=2>
                        <input type="submit">
                    </td>
                </tr>

            </table>
    </body>
</html>