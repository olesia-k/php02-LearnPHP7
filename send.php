<?

   // mail("seo@graver.by, example@gmail.com", "Заявка с сайта", "Оформлена заявка со страницы Контакты \n Модель 20 \n Тираж 20 шт.");

    if((isset($_POST['name']) && $_POST['name']!="") && (isset($_POST['user_email']) && $_POST['user_email']!="")) { //Проверка обязательных полей отправились ли они  поля и не пустые ли они.

        $user_email = $_POST['user_email']; // Поле email для БД 
        $name = $_POST['name']; // Поле name в для БД 
        $phone = $_POST['phone']; // Поле body в для БД   
        
        $to = "seo@graver.by";    
        $subject = "Заявка с сайта: " . $_POST['subject'];
        $message = "Оформлена заявка со страницы Контакты \n Тираж 20 шт.";
        $message .= ' 
                    <html>
                        <head>
                            <title>'.$subject.'</title>
                        </head>
                        <body>
                            <p>Email: '.$_POST['user_email'].'</p>
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

// ================== Загрузка изображения на сервер ==================

        if($_POST) {            

            if($_FILES){     

                $file_name = $_FILES['image']['name'];
                $file_name_tmp = $_FILES['image']['tmp_name']; // Используется для вставки в папку uploud
                $dir = '/uploads/'; // Путь к папке для сохранения файлов
                $file_new_name = $_SERVER['DOCUMENT_ROOT'].$dir; // работает, если /upload/ прописан со слешем вначале и в конце. $_SERVER['DOCUMENT_ROOT'] содержит домен.
                // $image = $_FILES['image']['name'] // Имя загружаемого файла
                $image = date('y-m_d_h_i_s').$file_name; // Имя загружаемого файла с датой и расширением, чтобы файлы с одним именем не перезаписывались.

                if (move_uploaded_file($file_name_tmp, $file_new_name.$image)) { // функция move_uploaded_file() загружает файл - параметры функции 1. откуда, 2. куда. Проверка: если файл с параметрами загружен, то вернуть true.
                    $ok = true;
                    echo "Сообщение отправлено и файл загружен";

                } else {
                    $image = ''; // Что вставляется в БД, когда файл не выбран. 
                        echo "Файл отсутствует";
                }

            } else {
                echo "Ошибка загрузки файла";
            }
        } 
        

// ================== Подключение к БД ==================


    require_once 'config.php'; // Подключаем скрипт

    // Проверка на ошибки и вывод данных
    $query = "INSERT INTO form VALUES(   
                NULL,
                '$user_email', 
                '$name', 
                '$phone',
                '$subject',                  
                '$image',  
                ''                
            )";
     
    // Передача данных в БД, если нет ошибок
    $result = mysqli_query($db_connect, $query);
    if (!$result) {
        exit('Ошибка данных в БД'.$query);
    }
     
    
