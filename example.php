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
<h1>Hello </h1>

<?
//        $dat = Date("d.m.y"); // Получить дату в переменной $dat, кавычки имеют значение.
//        echo "$dat"; // Вывести дату

//        $dat = Date("h:i:s"); // Получить время, кавычки имеют значение.
//        echo "$dat"; // Вывести дату

//        for ($i++; $i<=5; $i++) {
//            echo ($i*$i);  // Получить и вывести квадрат 5 простых
//        }

//        $myVar = 5;
//        echo gettype($myVar); // Узнать тип переменной. 5 - intedger, 5.25 - double

//        $var = 5;
//        if(isset($var)) { // Проверить существование переменной
//            echo "Переменная существует: $var";
//        }

//        $var = 5;
//        echo $var;
//        unset ($var); // Удалить переменную
//        echo $var;

//        define("pi", 3.14); // Создать переменную.
//        echo pi;

//        $arr =  array('a'=> 'apple', // Пример массива
//                'b' => 'car',
//                'c' => 'dog');
//        print_r($arr);

//        $a = "Hello ". "world";
//        echo $a[1]; // Выведет букву у
//        echo $a; // Выведет Hallow world

//        $x = -17; // Условные операции
//        $x = $x < 0? - $x : $x;
//        echo $x;

//        while ($i < 32) {
//            echo $i += 1; // Вывести все число до 32 включительно
//        }

//        $x = 1;
//        do {
//            echo $x;
//        }
//        while($x++ < 10); // Вывести х пока он <10, результат 12345678910

//        foreach ($_SERVER as $k => $v) //Глобавльная переменная $_SERVER
//            echo "<b>$k</b> => <b>$v</b> <br>"; // Вывести на экран значения, созданные веб сервером

//        $name = ["Alex", "Jeff", "Harvey"];
//        for ($i = 0; $i < count($name); $i++) {
//            echo $name[$i] . " ";
//        }

//        $name["Ivanov"] = "Alex";
//        $name["Wilsher"] = "Jeff";
//        $name["Spectr"] = "Harvey";
//        echo $name["Spectr"]; // Вывести значения ключа Spectr, т.e. Harvey
//        define("arr",
//            ["proza" => ["name"=>"Ivan","born"=>"26.01.1989" ]]
//        );
//        echo arr["proza"]["name"]; // Вывести значение ключа name, который находится в ключе proza ассоциативного массива.
//        $num = count($name); // Переменная содержит кол-во элементов в массиве
//        echo $num;

//        $first = ["first", "second"];
//        $second = ["dog", "cat"];
//        $all = $first + $second; // Слияние массивов

//        $birth = [
//            "Thomas" => "1980.11.18",
//            "John" => "1992.04.28"
//        ];
//        foreach ($birth as $k=>$v) // Обращаемся к переменной $birth, в которой есть ключ $k со значением $v
//           echo "$k родился $v <br>"; // Вывести надпись, содержащую ключ $k родился $v (значение ключа $k). Результат – все ключи со своими значениями.


?>


<?
// Функции

    function mySqr($n) {
        return $n*$n; // Вычислить квадрат числа
    }
    $val = mySqr(5); // Задать значение числа через переменную
    echo $val; // Вывести результат
    echo mySqr(5); // Упрощенная запись вывода результата функции

    // Посчитать, сколько раз данная функция была вызвана

    function funcCount() {
        static $count = 0; // Обявили статическую переменную.
        $count++; // Переменная содержит число, сколько раз фукнция вызвана.
        echo $count; // Вывести значение count
        for ($i=0; $i<5; $i++){
            funcCount(); // В цикле указываем, что функция сработала 5 раз.
        }
    }

?>

<!-- Формы -->

<form action="" method="GET">
    <p>Имя: <input type="text" name="name"></p>-->
    <p>Возраст: <input type="text" name="age"></p>-->
    <p><input type="submit"></p>-->
</form>-->
Привет --><? echo htmlspecialchars($_GET['name']); ?>
Вам --><? echo (int)($_GET['age']); ?> лет. <!--  // (int) преобразует дробное-->
<? echo "Данные из адресной строки: {$_SERVER[ 'QUERY_STRING']}"; // Работает при методе GET
?>


<form action="<?echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
    <fielset>
        <legend>Выберите животное</legend>
        <lable for="dog">
            <input type="checkbox" id="dog" name="animal[]" value="собака">Собака
        </lable>
        <lable for="cat">
            <input type="checkbox" id="cat" name="animal[]" value="кот">Кот
        </lable>
        <lable for="fox">
            <input type="checkbox" id="fox" name="animal[]" value="лиса">Лиса
        </lable>
        <lable for="tiger">
            <input type="checkbox" id="tiger" name="animal[]" value="тигр">Тигр
        </lable>
    </fielset>
    <input type="submit" value="Send">
</form>
<?
$animal = isset($_POST['$animal']) ? $_POST['$animal']: '';    // Проверить, была ли установлена перменная/масссив animal со значением отличным от NULL
if(!empty($animal)) { // Проверить, что $animal не пустая
    echo '<br><br> Выбраны: '; // Вывести текст
    foreach ($animal as $a) {   // Перебрать массив и выбрать отмеченные значения (переменную $а создать любую)
        echo "<span style='color: green'>".htmlentities($a)."</span>"; // В методе htmlentities($a) создать переменую $a
    }
}
?>



</body>
</html>
