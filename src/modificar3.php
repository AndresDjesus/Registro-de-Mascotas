<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("conexion.php");
$sql = "update Pets set name= '$_POST[name]', breed= '$_POST[breed]', owner= '$_POST[owner]' where ID= '$_POST[oculto]'";
//print_r($sql);
$result = mysqli_query($link,$sql);
if (!mysqli_error($link)) {
?>
<script>
alert("Se modifico con exito");
</script> }
<?php } else { ?>
<script>
alert("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=modificar.php">





