<?
    require_once("head.php");

   // mail("seo@graver.by, example@gmail.com", "Заявка с сайта", "Оформлена заявка со страницы Контакты \n Модель 20 \n Тираж 20 шт.");

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

    mail($to, $subject, $message, $headers);

?>

	<form action="email.php" method="POST">
		<input type="email" name="email" placeholder="Email"><br>
		<input type="text" name="name" placeholder="Имя"><br>		
		<input type="text" name="phone" placeholder="Телефон"><br>
		<input type="text" name="subject" placeholder="Тема"><br>
		<textarea name="message">Сообщение</textarea><br>
		<button>Отправить</button>
	</form>


<?
    require_once("footer.php");
?>