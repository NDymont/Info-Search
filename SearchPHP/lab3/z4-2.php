<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> z4-1b </title>
    <style type="text/css">
        .temp {
            border: 1px solid black;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

<?php

$align = isset($_GET['align']) ? $_GET['align'] : 'left';
$valign = isset($_GET['valign']) ? $_GET['valign'] : 'top';

print "<table border=\"1px\" width=\"100px\" height=\"100px\" text-align=\"$align\" align=\"center\">\n";
print "<tr><td align=\"$align\" valign=\"$valign\">Text</td></tr></table>\n";
print "<form action='{$_SERVER['PHP_SELF']}' method='get' align=\"center\">"

?>

<h3>Choose horizontal</h3>
<p><label><input type="radio" name="align" value="left"></label>Left</p>
<p><label><input type="radio" name="align" value="center"></label>Center</p>
<p><label><input type="radio" name="align" value="right"></label>Right</p>

<h3>Choose vertical</h3>
<p><label><input type="checkbox" name="valign" value="top"></label>Up</p>
<p><label><input type="checkbox" name="valign" value="middle"></label>Center</p>
<p><label><input type="checkbox" name="valign" value="bottom"></label>Down</p>

<p><input type="submit" value="Выполнить"></p>
</form>

</body>

</html>