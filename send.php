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

        if($_POST) {
            echo "<pre>";
             print_r($_POST);
            echo "<pre>";

            if (isset ($_FILES)){
                echo "<pre>";
                 phprint_r($_FILES);
                echo "<pre>";
            }
        } 
        
