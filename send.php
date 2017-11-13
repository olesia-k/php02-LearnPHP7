<?

   // mail("seo@graver.by, example@gmail.com", "Заявка с сайта", "Оформлена заявка со страницы Контакты \n Модель 20 \n Тираж 20 шт.");

    if((isset($_POST['name']) && $_POST['name']!="") && (isset($_POST['email']) && $_POST['email']!="")) { //Проверка обязательных полей отправились ли они  поля и не пустые ли они.

        $to = "seo@graver.by";    
        $subject = "Заявка с сайта";
        $message = "Оформлена заявка со страницы Контакты \n Модель 20 \n Тираж 20 шт.";
        $message .= ' 
                    <html>
                        <head>
                            <title>'.$subject.'</title>
                        </head>
                        <body>
                            <p>Email: '.$_POST['email'].'</p>
                            <p>Имя: '.$_POST['name'].'</p>
                            <p>Телефон: '.$_POST['phone'].'</p>                        
                            <p>Сообщение: '.$_POST['message'].'</p>                        
                        </body>
                    </html>';
        $headers = "Content-type:text/html; charset=utf-8 \r\n";
        $headers .= "From: seo@graver.by";
        $headers .= "Replay to: seo@graver.by";

        // mail($to, $subject, $message, $headers);

    }

// ================== Загрузка изображения ==================

    if(isset($_FILES) && $_FILES['image']['error'] == 0){  // Проверяем, загрузил ли пользователь файл

        $file_name_tmp = $_FILES['image']['tmp_name']; // Новое имя файла, которе используется для вставки в папку uplouds
        
        $dir = '/uploads/'; // Директория для размещения файла
        // $dir = dirname(uploads) .'/'.$_FILES['image']['name']; // Директория для размещения файла

        $file_name = $_FILES['image']['name'] // Имя загружаемого файла


        if (move_uploaded_file($file_name_tmp, $file_new_name.$image)) { // функция move_uploaded_file() загружает файл - параметры функции 1. откуда, 2. куда. Проверка: если файл с параметрами загружен, то вернуть true.
            $ok = true;


        }



        move_uploaded_file($file_name_tmp, $dir ); // Перемещаем файл в желаемую директорию
        echo 'Файл загружен'; // Оповещаем пользователя об успешной загрузке файла
        }
        else{
        echo 'Файл не загружен'; // Оповещаем пользователя о том, что файл не был загружен
        }







        // $errors = array();
        // $file_name  = $_FILES['image']['name'];
        // $file_size  = $_FILES['image']['size'];
        // $file_tmp   = $_FILES['image']['tmp_name'];
        // $file_type  = $_FILES['image']['type'];
        // $file_ext   = strtolower(end(explode('.', $_FILES['image']['name'])));

        // $expensions = array("jpeg", "jpg", "png");

        // if ($file_size > 2097152) {
        //     $errors[] = 'Файл должен быть 2 Мб';
        // }

        // if (empty($errors) == true) {
        //     move_uploaded_file($file_tmp, "uploads/".$file_name);
        //     echo "Файл загружен";
        // } else {
        //     print $errors;
        // }

    // }