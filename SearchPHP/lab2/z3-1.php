<!DOCTYPE html>
<html>
<head>
    <title> Lab2-3 </title>
</head>
<body>

<?php
$color = "#e6e6fa";
print "<table border=1 cellpadding=5px>\n";
for ($y = 1; $y <= 10; $y++) {
    print "<tr>\n";
    for ($x = 1; $x <= 10; $x++) {
        if ($x == $y) {
            print "\t<td bgcolor=\"$color\">";
        } else {
            print "\t<td>";
        }
        print ($x * $y);
        print "</td>\n";
    }
    print "</tr>\n";
}
print "</table>";

?>
</body>
</html>

<!--№ 3-->
<!--Используя вложенные циклы while, в скрипте z3-1.php
отобразите на экране таблицу Пифагора 10×10 (т.е. таблицу умножения чисел от 1 до 10).
При этом фон диагональных ячеек должен быть того цвета, который задается вне циклов.
Ширина рамки таблицы равна 1, отступ содержимого ячеек от границы равен 5.-->
<!---->
<!--1	2	3	...	10-->
<!--2	4	6	...	20-->
<!--3	6	9	...	30-->
<!--...	...	...	...	...-->
<!--10	20	30	...	100-->
<!--Обязательно используйте служебные символы табуляции и новой строки для создания читабельного html-файла.-->
<!---->
<!--(Использовать листинги 7-1 и 7-6).-->