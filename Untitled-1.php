<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
<?php

$str = 'hello world';
$str = implode(' ', array_reverse(explode(' ', $str)));

echo $str;

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($numbers as $index=>$value) {

    if ($value % 2 == 0) {
        echo $value . " ";
    } else {
        
    }
}

?>

</body>
</html>
