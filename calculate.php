<?php
$a = $_REQUEST["a"];
$b = $_REQUEST["b"];
$operation = $_REQUEST["operation"];
switch ($operation) {
    case "+":
        $result = $a + $b;
        break;
    case "-":
        $result = $a - $b;
        break;
    case "*":
        $result = $a * $b;
        break;
    case "/":
        $result = $a / $b;
        break;
    default:
        $result = "Illegal operation: " + $operation;
}
$longResult = $a . $operation . $b . "=" . $result;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator result</title>
</head>
<body>
<?= $longResult ?>
</body>
</html>