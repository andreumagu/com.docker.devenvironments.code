<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="a">
        <input type="submit" value="Calcular">
    </form>

    <table id="tabla">
        <tr>
            <th>a</th>
            <th>*</th>
            <th>b</th>
            <th>=</th>
            <th>a*b</th>
        </tr>

        <?php
            $a = $_GET["a"];
            if (isset($a)) {
                for ($i=1; $i <= 10; $i++) { 
                    echo "<tr>";
                    echo "<td>" . $a . "</td>";
                    echo "<td>*</td>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>=</td>";
                    echo "<td>" . $a * $i . "</td>";
                    echo "</tr>";
                }
            }
            
        ?>
    </table>
</body>
</html>

