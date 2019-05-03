<html>
    
    <body >
            <form name="form" action="insert.php" method="POST">
            <table align="center" border="1">
                <tr><td colspan="2"><center><font size="4" color="black" face="Tw Cen MT"><center><b>Mi tienda_Registros Productos</b></center></td></tr></font>
        <tr>
            <td>Codigo producto: </td><td><input type="text" name="cod_prod" ></td>
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
        <center><input type="submit" value="Registrar"></center>             
    </form>
    <hr>
    </body>
</html>

<?php

    include("database.php");
    echo "<table border='1'>";
    echo "<tr><th>Codigo</th><th>Nombre</th><th>Cantidad</th><th>.</th><th>.</th></tr>";
    $sql="SELECT * FROM productos";
    $result=$conn->query($sql);// tomar el sql y ejecutarlo
    
    if($result->num_rows >0){
        while($row=$result->fetch_assoc()){
            //echo "Si hay productos registrados";
            echo "<tr>";
            echo "<td>".$row['codigo_prod']."</td>";
            echo "<td>".$row['nombre_prod']."</td>";
            echo "<td>".$row['cantidad']."</td>";
            echo "<td><a href='update.php?id=".$row['id']."&cod=".$row['codigo_prod']."&nom=".$row['nombre_prod']."&cant=".$row['cantidad']."'><img src='icons/edit.png'></a></td>";
            echo "<td><a href='delete.php?id=".$row['id']."&cod=".$row['codigo_prod']."'><img src='icons/delete.png'></a></td>";
            echo "</tr>";
        }
    }else{
        echo "No hay productos registrados";
    }

?>

