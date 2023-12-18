<!DOCTYPE html>
<html>
<head>
    <title>Listing 10-1. Simple HTML Form</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
function get_right_answers_num($correctAnswers, $userAnswers) {
    $result = 0;
    for ($i = 0; $i < 9; ++$i) {
        if ($correctAnswers[$i] == $userAnswers[$i]) {
            $result += 1;
        }
    }

    return $result;
}

function get_result_text_based_on_right_answers_num($name, $rightAnswersNum) {
    switch ($rightAnswersNum) {
        case 9:
            $resultText = ", вы великолепно знаете географию";
            break;
        case 8:
            $resultText = ", вы отлично знаете географию";
            break;
        case 7:
            $resultText = ", вы очень хорошо знаете географию";
            break;
        case 6:
            $resultText = ", вы хорошо знаете географию";
            break;
        case 5:
            $resultText = ", вы удовлетворительно знаете географию";
            break;
        case 4:
            $resultText = ", вы терпимо знаете географию";
            break;
        case 3:
            $resultText = ", вы плохо знаете географию";
            break;
        case 2:
            $resultText = ", вы очень плохо знаете географию";
            break;
        default:
            $resultText = ", вы вообще не знаете географию";
    }

    return $name . $resultText;
}

$correctAnswers = array("6", "9", "4", "1", "3", "2", "5", "8", "7");
$userAnswers = $_POST["answers"];
$name = $_POST["user"];

$rightAnswersNum = get_right_answers_num($correctAnswers, $userAnswers);
$resultText = get_result_text_based_on_right_answers_num($name, $rightAnswersNum);

print "<p align='center'>$resultText";
print "<p align='center'><a href='z4-3a.html'>back</a>";
?>
</body>
</html>