<?php

    $id=$_GET['id'];
    $cod=$_GET['cod'];
    $nom=$_GET['nom'];
    $cant=$_GET['cant'];
?>

<html>
    
    <body >
            <form name="form" action="insert.php" method="POST">
            <input type="hidden" name="id" value=<?php echo $id; ?>
            <table align="center" border="1">
                <tr><td colspan="2"><center><font size="4" color="black" face="Tw Cen MT"><center><b>Mi tienda_formulario de actualizacion de productos</b></center></td></tr></font>
        
        <tr>
            <td>Codigo producto: </td><td><input type="text" name="cod_prod"  value=<?php echo $cod; ?></td>
        </tr>
        <tr>
            <td>Nombre producto:</td><td><input type="text" name="nom_prod" ></td>
        </tr>
        <tr>
            <td>Cantidad: </td><td><input type="text" name="cantidad" ></td>
        </tr>
        <tr>
            <td>Imagen: </td><td><input type="file" name="imagen" ></td>
        </tr>
        
    </table><br>
        <center><input type="submit" value="Actualizar"></center>             
    </form>
    <hr>
    </body>
</html>