<!DOCTYPE html>
<html>

<head>
    <title>Просмотр</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 0 auto;
            /* ������������� ������� �� ����������� */
        }

        table td,
        table th {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <?php
    include("utils.php");
    $result = getRows();

    echo "<table>\n";
    getDesc();

    while ($a_row = mysqli_fetch_row($result)) {
        echo "<tr>\n";
        foreach ($a_row as $field) {
            echo "<td>$field</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    ?>
</body>

</html>