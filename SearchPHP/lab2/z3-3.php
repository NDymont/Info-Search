<html>
<head>
    <title> lab 2-5 </title>
</head>
<body>

<?php

function Ru($color)
{
    print "<p style=\"color:$color;\">Здравствуйте!";
}

function En($color)
{
    print "<p style=\"color:$color;\">Hello!";
}

function Fr($color)
{
    print "<p style=\"color:$color;\">Bonjour!";
}

function De($color)
{
    print "<p style=\"color:$color;\">Guten Tag!";
}

function Unknown($color)
{
    print "<p style=\"color:$color;\">:(";
}

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'Unknown';
//$lang = 'Unknown';
$color = isset($_GET['color']) ? $_GET['color'] : 'black';

$lang($color)

?>
</body>
</html>


<!--№ 5-->
<!--В скрипте z3-3.php создайте 4 функции с именами Ru(), En(), Fr(), De().-->
<!-- Каждая функция выводит на экран приветствие на соответствующем языке:-->
<!--Ru() - "Здравствуйте!",-->
<!--En() - "Hello!",-->
<!--Fr() - "Bonjour!" и-->
<!--De() - "Guten Tag!".-->
<!---->
<!--Эти функции имеют аргумент $color, который определяет цвет выводимого текста.-->
<!-- Используя функцию-переменную $lang(), отобразить на экране одно из приветствий,-->
<!-- причем какое приветствие будет выведено и каким цветом --->
<!-- задать как параметры в строке вызова скрипта:-->
<!---->
<!--z3-3.php?lang=Ru&color=[назв-е цвета]-->
<!--               En/Fr/De-->
<!---->
<!--               (Использовать листинг 8-3).-->

