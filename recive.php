<?php
    include "conexao.php";
    $vtemp=$_GET["tempe"];
    $sql = "UPDATE sensores SET temperatura = ($vtemp) where id_sensor = 5;";
    mysqli_query($conn, $sql);
    header('Location: index.php');
    exit();
?>