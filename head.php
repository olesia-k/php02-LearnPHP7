<?
$counter = isset($_COOKIE['counter']) ? $_COOOKIE['counter'] :0; // Проверить, существует ли куки с названием counter, если нет, то у него значение 0
$counter++; // Прибавляем каждый раз по 1
setcookie("counter", $counter);
echo $counter;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> </h1>


