<html>
<head>
  <meta charset="utf-8">
  <title>Consult</title>
</head>
<body bgcolor="LemonChiffon">
  <?php
  include("menu.html");
  include("conexion.php");
  ?>
  <br>
  <table width="600" border="1" align="center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">TYPE</th>
      <th scope="col">BREED</th>
      <th scope="col">OWNER</th>
      <th scope="col">BIRTH DATE</th>
    </tr>
    <h1 align ="center">Pet Registration Table</h1>
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
      </tr> <?php } ?>
  </table>
</body>
</html>