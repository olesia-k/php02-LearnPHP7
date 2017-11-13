<? // Функция куки должна идти перед <!doctype html>
$cookie_name = "user";  // Создать переменную 'Имя куки' со значкением user (в реальной ситуации данные берутся из заполненной формы)
$cookie_value = "cookie user"; // Задать куки значение cookie user
setcookie($cookie_name, $cookie_value, time()+86400); // Создать куки с именем  $cookie_name, значением $cookie_value и временем жизни 24 часа.
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

<?
    if (count($_COOKIE>0)) {
        echo "Куки включены";
    } else {
        echo "Куки отключены";
    }
?>


