<html>
<head>
    <title> Листинг 9-2. Просмотр массива
    </title></head>
<body>

<?php
function print_ass_arr($array)
{
    foreach ($array as $key=>$value) {
        print "$key => $value <br>";
    }
    print "<br>";
}

$cust = array(
    'cnum' => 2001,
    'cname' => "Hoffman",
    'city' => "London",
    'snum' => 1001,
    'rating' => 100
);
print_ass_arr($cust);

asort($cust);
print_ass_arr($cust);

ksort($cust);
print_ass_arr($cust);

sort($cust);
print_ass_arr($cust);

?>
</body>
</html>

<!--В скрипте z3-6.php-->
<!---->
<!--1. Создайте ассоциативный массив $cust[]-->
<!--с ключами cnum, cname, city, snum и rating-->
<!--и значениями: 2001, Hoffman, London, 1001 и 100.-->
<!--Выведите этот массив (вместе с именами ключей) на экран.-->
<!--2. Отсортируйте этот массив по значениям. Выведите результат на экран.-->
<!--3. Отсортируйте этот массив по ключам. Выведите результат на экран.-->
<!--4. Выполните сортировку массива с помощью функции sort(). Выведите результат на экран.-->
<!--(Использовать листинги 9-1 - 9-10).-->
<!---->
