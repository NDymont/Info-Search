<?php
include("utils.php");
echo "<form method='POST' action='ex4a.php'>\n";

$id_2 = isset($_POST['id_2']) ? $_POST['id_2'] : "";
$field_name = isset($_POST['field_name']) ? $_POST['field_name'] : "";
$field_value = isset($_POST['field_value']) ? $_POST['field_value'] : "";

if (!empty($id_2) && !empty($field_name)) {
    updateField($id_2, $field_name, $field_value);
    header("Location: ex4.php");
    exit();
}

if(!isset($_GET['id'])){
    header("Location: ex4.php");
    exit();

}
$id = $_GET['id'];
$obj = mysqli_fetch_assoc(selectRecordById($id));

echo "<select name='field_name'>
<option value='name'>name: $obj[name]</option>
<option value='city'>city: $obj[city]</option>
<option value='address'>address: $obj[address]</option>
<option value='birthday'>birthday: $obj[birthday]</option>
<option value='mail'>mail: $obj[mail]</option>
</select>";

echo "\tВведите новое значение\t";
echo "<input type='text' name='field_value'  required>";

echo "<input type='hidden' name='id_2' value='$id'>";

echo "<br>";
echo "<br><button type='submit'>Заменить</button>";
echo "</form>";

echo "<a href='ex4.php'>Назад</a>";
