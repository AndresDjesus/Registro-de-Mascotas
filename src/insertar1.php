<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="LemonChiffon">
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include ("conexion.php");
$sql = "Insert into Pets(name, type, breed, owner) values('$_POST[name]','$_POST[type]','$_POST[breed]', '$_POST[owner]')";
$result = mysqli_query($link, $sql); 
if (!mysqli_error($link)) {
?>
<script>
alert("Se registro con exito");
</script> }
<?php 
}else{?>
<script>
alert("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=insertar.php">


</body>
</html>

