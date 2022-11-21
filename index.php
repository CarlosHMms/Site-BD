<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="js/scripts.js" defer></script>
    <title>Apresentação BD I</title>
</head>

<body>


    <?php include 'conexao.php' ?>

    <?php
    $sql = "SELECT * FROM sensores where cod_sensor <= 5";
    $resultado = mysqli_query($conn, $sql);
    ?>


    <header>
        <img id="logo" src="imgs/logoif.png" alt="">
    </header>
    <div class="background">
        <div id="table1">
            <table class="tabelaSensor">
                <thead>
                    <tr>
                        <th>ID Sensor </th>
                        <th>Tipo do Sensor </th>
                        <th>Range </th>
                        <th>Temperatura </th>
                        <th>Umidade </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($userdata = mysqli_fetch_assoc($resultado)) {

                        echo "<tr>";
                        echo "<td>" . $userdata["id_sensor"] . "</td>";
                        echo "<td>" . $userdata["id_tip"] . "</td>";
                        echo "<td>" . $userdata["valor"] . "</td>";
                        echo "<td>" . $userdata["temperatura"]."C°". "</td>";
                        echo "<td>" . $userdata["umidade"] ."%". "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div id="table2">
            <table class="tabelaRegistro">
                <thead>
                    <tr>
                        <th>ID do Registro </th>
                        <th>Localização </th>
                        <th>Data </th>
                        <th>Hora </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM  registro where id_registro < 6";
                    $resultado = mysqli_query($conn, $sql);
                    while ($userdata = mysqli_fetch_assoc($resultado)) {

                        echo "<tr>";
                        echo "<td>" . $userdata["id_registro"] . "</td>";
                        echo "<td>" . $userdata["localizacao"] . "</td>";
                        echo "<td>" . $userdata["regis_data"] . "</td>";
                        echo "<td>" . $userdata["regis_hora"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div id="table3">
            <table class="tabelaBomba">
                <thead>
                    <tr>
                        <th> ID do Sensor </th>
                        <th> ID do Registro </th>
                        <th> Status </th>
                        <th> Data do Registro </th>
                        <th> Hora do Registro </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM  bomba where id_regis = 1";
                    $resultado = mysqli_query($conn, $sql);
                    while ($userdata = mysqli_fetch_assoc($resultado)) {

                        echo "<tr>";
                        echo "<td>" . $userdata["id_sens"] . "</td>";
                        echo "<td>" . $userdata["id_regis"] . "</td>";
                        echo "<td>" . $userdata["valor"] . "</td>";
                        echo "<td>" . $userdata["data_registro"] . "</td>";
                        echo "<td>" . $userdata["hora_registro"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>