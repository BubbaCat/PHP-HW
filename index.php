<?php 
echo "_POST array:<br>";

print_r($_POST);

echo "<br><br>";

if (!empty($_POST)) {

$message = "Вам пришло сообщение \n" 
. "Имя отправителя:" . $_POST["username"]. "\n"
. "Почта отправителя:" .$_POST["usermail"] . "\n"
. "Сообщение пользователя: \n". $_POST["message"];

$headers = "From: evgeniy.sapov@gmail.com";

$email = mail("evgeniy.sapov@gmail.com","Письмо с сайта",$message, $headers);

if($email){
 	echo "Сообщение успешно отправлено";
} else {
	echo "Ошибка в отправке сообщения";
}
}?>


<form action="index.php" method="post">
<input type="text"	name="username" placeholder="Ваше имя"><br>
<input type="text"	name="usermail" placeholder="Ваша почта"><br>
<textarea type="text"	name="message" placeholder="Ваше сообщение"></textarea><br>
<input type="submit" cols="30" rows="10""> 
</form>