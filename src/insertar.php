<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Pet Registration</title>
</head>
<body bgcolor="LemonChiffon">
    <?php
    include("menu.html");
    ?>
    <br>
    <br>
    <form id="formal" name="formal" method="post" action="insertar1.php">

    <table border="1" style="margin: 0 auto;">
    <th colspan="2">Pet Registration</th>
    <tr><td>Name:</td><td><input type="text" name="name" id="name" /> <br></td></tr>
    <tr><td>Type:</td><td><input type="text" name="type" id="type" /> <br></td></tr>
    <tr><td>Breed:</td><td><input type="text" name="breed" id="breed" /> <br></td></tr>
    <tr><td>Owner:</td><td><input type="text" name="owner" id="owner" /> <br></td></tr>
    <tr><td>Birth Date:</td><td><input type="text" name="birth_date" id="birth_date" /> <br></td></tr>

    <tr><td> <input type="submit" value="To register" id="registrar"/>
    <td> <input type="reset" value="Clean" id="clean"/></tr>
</table>
    </form>
</body>
</html>