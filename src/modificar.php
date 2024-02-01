<html>
<head>
  <meta charset="utf-8">
  <title>Modify</title>
</head>
<body bgcolor="LemonChiffon">
  <?php
  include("menu.html");
  include("conexion.php");
  ?>
  <br><br>
  <table width="600" border="1" align="center">
    <tr> 
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">type</th>
      <th scope="col">breed</th>
      <th scope="col">owner</th>
      <th scope="col">birth date</th>
      <th scope="col">MODIFY </th>
      <th scope="col">ELIMINATE</th>

    </tr>
    <?php
    $sql = "select * from Pets";
    $result = mysqli_query($link, $sql); //ejecuto la consulta
    while ($ver = mysqli_fetch_array($result)) { ?>
      <tr> 
        <td><?php print $ver[0]; ?></td>
        <td><?php print $ver[1]; ?></td>
        <td><?php print $ver[2]; ?></td>
        <td><?php print $ver[3]; ?></td>
        <td><?php print $ver[4]; ?></td>
        <td><?php print $ver[5]; ?></td>
        <td><a href="modificar2.php?mod=<?php print $ver[0];?>">Modificar</a></td>
        <td><a href="eliminar.php?eli=<?php print $ver[0];?>">Eliminar</a></td>
      </tr> <?php } ?>
  </table>
</body>
</html>