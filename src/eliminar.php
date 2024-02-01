<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body bgcolor="LemonChiffon">
  <?php include "conexion.php";
$sql = "delete from Pets where ID='$_GET[eli]'";
$result = mysqli_query($link, $sql);
if (!mysqli_error($link)) {
?>
  <script>
    alert("Se elimino con exito");
  </script> }
<?php } else { ?>
  <script>
    alert("Estamos en mantenimiento preventivo");
  </script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=modificar.php">
</body>
</html>
