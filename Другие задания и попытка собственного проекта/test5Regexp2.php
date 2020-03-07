 <?php
 
error_reporting(-1);
echo "<plaintext>";
echo "Введите номер государственной регистрации в России автомобиля\n";

$automobileNumber = "б567мн";
echo "Вы ввели {$automobileNumber}\n";

$regexp = '/^[а-яё][0-9]{3}[а-яё]{2}$/ui';

if(preg_match($regexp, $automobileNumber)) {
echo "Номер введён правильно\n";
} 
	else {
		echo "Номер введён неправильно. Просмотрите на предмет наличия ошибок\n";
	}

?>