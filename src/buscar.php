<html>
<head>
  <meta charset="utf-8">
  <title>Look for</title>
</head>
<body bgcolor="LemonChiffon">
  <?php
  include("menu.html");
  include("conexion.php");
  ?>
  <form method="POST" name="form1">
    <p>&nbsp;</p>
    <table width="512" height="46" border="0" align="center">
      <tr>
        <th height="40" scope="col">ID</th>
        <th scope="col"><input type="text" name="buscar" id="buscar" /></th>
        <th scope="col"><input type="submit" name="bus" value="Look for" /></th>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
  <?php if (isset($_POST['buscar'])) { ?>
    <table width="600" border="1" align="center">
      <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">TYPE</th>
      <th scope="col">BREED</th>
      <th scope="col">OWNER</th>
      <th scope="col">BIRTH DATE</th>
      </tr>
      <?php
      $sql = "select * from Pets where ID ='$_POST[buscar]'";
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
    </table> <?php } ?>
</body>
</html>