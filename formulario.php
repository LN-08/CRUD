<!DOCTYPE html>

<?php
 $con = mysqli_connect("localhost", "root", "", "crud") or die ("Error");
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto</title>
</head>
<body>
    <form method="POST" action="formulario.php">
        <label> Marca: </label>
        <input type="text" name="marca" placeholder="Marca">
        <label> Modelo: </label>
        <input type="text" name="modelo" placeholder="Modelo">
        <label> Color: </label>
        <input type="color" name="color" placeholder="Color">
        <label> Patente: </label>
        <input type="text" name="patente" placeholder="Patente">
        <label> Año: </label>
        <input type="date" name="año" placeholder="Año">
        <label> KiloMetraje: </label>
        <input type="number" name="kilometraje" placeholder="KM">

        <input type="submit" name="insert" value="Insertar datos">
    </form>

    <?php 
        if (isset($_POST['insert'])){
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $color = $_POST['color'];
            $patente = $_POST['patente'];
            $año = $_POST['año'];
            $kilometraje = $_POST['kilometraje'];
        
            $insertar = "INSERT INTO vehiculo (marca, modelo, color, patente, año, kilometraje) VALUES ('$marca', '$modelo', '$color', '$patente', '$año', '$kilometraje')";
        
            $ejecutar = mysqli_query($con, $insertar);
        
            if($ejecutar){     
                echo "<h3> Insertado </h3>";        
            }
        }
    
    
    ?>


</body>
</html>