<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = "Andreu";
        $apellido1 = "Martinez";
        $apellido2 = "Gual";
        $email = "andreumagu@gmail.com";
        $anonaz = "2002";
        $telf = "603504062";
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Email</th>
            <th>Año de nacimiento</th>
            <th>Telefono</th>
        </tr>
        <tr>
            <td><?php echo $nombre;?></td>
            <td><?php echo $apellido1;?></td>
            <td><?php echo $apellido2;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $anonaz;?></td>
            <td><?php echo $telf;?></td>
        </tr>
    </table>
</body>
</html>