<? require_once("head.php");

    // if (preg_match("/php/i", "PHP is the web scripting language")) { // Если набор символов php в любом регистре есть в указанной строке.
    //     echo "Успех"; // Результат - вхождение найдено
    // } else {
    //     echo "Вхождение не найдено";
    // }


    // if (preg_match("/\bweb\b/i", "PHP is the web scripting language")) { // Если отдельное слово web в любом регистре есть в указанной строке. 
    //     echo "Успех"; // Результат - вхождение найдено
    // } else {
    //     echo "Вхождение не найдено";
    // }


    // if (preg_match("/\bscript\b/i", "PHP is the web scripting language")) { // Если набор символов script в любом регистре есть в указанной строке. 
    //     echo "Успех";
    // } else {
    //     echo "Вхождение не найдено"; // Результат - вхождение НЕ найдено
    // }


    // if (preg_match("/script/i", "PHP is the web scripting language")) { // Если отдельное слово script в любом регистре есть в указанной строке. 
    //     echo "Успех"; // Результат - вхождение найдено
    // } else {
    //     echo "Вхождение не найдено"; // Р
    // }



    preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $matches);

    $host = $matches[1];

    preg_match(('/[^.]+\.[^.]+$/'), $host, $matches);
    echo "Доменное имя: {$matches[0]}\n";
        







?>

<? require_once("footer.php"); ?>