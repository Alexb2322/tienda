<?php
//1. Connection
    include("database.php");

    //2. Get data
    $id=$_GET['id'];
    $cod=$_GET['cod'];

    //echo $id."<br>";
    //echo $cod;

    //3. Create SQL
    $sql="DELETE FROM productos WHERE id=$id";

    //4. Execute SQL
    $conn->query($sql);

    //5. Show confirmation message
    echo "<script languaje='javascript'>alert('producto registrado satisfactoriamente')</script>";
    header ("refresh:0; url=index.php");

?>