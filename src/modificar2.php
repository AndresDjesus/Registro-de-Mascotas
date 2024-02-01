<html>
<head>
  <meta  charset="utf-8">
  <title>Documento sin título</title>
</head>
<body bgcolor="LemonChiffon"> 
  <?php 
        include("conexion.php");
        $sql = "select * from Pets where ID ='$_GET[mod]'";
        $result = mysqli_query($link,$sql);
        $ver = mysqli_fetch_array($result);
        ?>
  <form id="form1" name="form1" method="Post" action="modificar3.php">
    <p>
      <label for="textfield">name:</label>
      <input type="text" name="name" id="name"   value="<?php print $ver[1]; ?>" />
    </p>
    <p>
      <label for="textfield2">type:</label>
      <input type="text" name="type" id="type" value="<?php print $ver[2]; ?>" />
    </p>
    <p>
     <label for="textfield3">breed:</label>
      <input type="text" name="breed" id="breed" value="<?php print $ver[3]; ?>" />
    </p>
    <p>
      <label for="textfield3">owner:</label>
      <input type="text" name="owner" id="owner" value="<?php print $ver[4]; ?>" />
    </p>
    <p>
    <label for="textfield3">birth date:</label>
     <input type="text" name="birth date" id="birth date" value="<?php print $ver[6]; ?>" />
    </p>
    <input type="hidden"name="oculto" id="oculto" value="<?php print $ver[0]; ?>"/>
    </p>
    <input type="submit" name="submit" id="submit" value="Enviar">
    </form>
</body>
</html>