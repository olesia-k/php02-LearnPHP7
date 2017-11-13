<?
    require_once("head.php");
?>

	<form action="send.php" method="POST" id="form">
		<div class="form-group">
			<input type="email" class="form-control" name="email" placeholder="Email*" >
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Имя*" >
		</div>
		<div class="form-group">	
			<input type="text" class="form-control" name="phone" placeholder="Телефон">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="subject" placeholder="Тема">
		</div>
		<div class="form-group">    
	    	<input type="file" name="image">
	    	<p class="help-block">Форматы файла: .jpg, .jpeg, .png, до 20 Мб</p>
	  	</div>

		<div class="form-group">
			<textarea name="message">Сообщение</textarea>
		</div>
		<button type="submit" id="send" class="btn btn-default">Отправить</button>
	</form>


<?
    require_once("footer.php");
?>