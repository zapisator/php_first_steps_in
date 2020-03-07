 <?php
 
error_reporting(-1);
//mb_internal_encoding("UTF-8");

$text = "Lazer bore her obrezal";
$isPalindrom = "Да, это палиндром";

//$textLow = mb_strtolower($text);
$textLow = strtolower($text);
$trimmedText1 = str_replace (" ", "", $textLow);
$trimmedText2 = str_replace (".", "", $trimmedText1);

$length = strlen($trimmedText2);
$halfLeghth = floor ($length / 2);

echo "<plaintext>";
echo "{$text}\n";
echo "Все маленькие: {$textLow}\n";
echo "Сокращённый текст-1: {$trimmedText1}\n";
echo "Сокращённый текст-2: {$trimmedText2}\n";
echo "Длина текста: {$length}\n";
echo "Половина длины текста: {$halfLeghth}\n";


for ($i = 1; $i <= $halfLeghth; $i++) {
    $iNot = $i*(-1);	
    $leftLetter = substr($trimmedText2, $i-1, 1);
    $rightLetter = substr($trimmedText2, $iNot, 1);
    echo "{$i}-ая буква слева : {$leftLetter}\n";	
    echo "{$i}-ая буква справа: {$rightLetter}\n";
    
    if (substr($trimmedText2, $i-1, 1) != substr($trimmedText2, $iNot, 1)) {
	    $isPalindrom = "Нет, это не палиндром\nПосмотри ходя бы на {$i}-ые с концов знаки.";
	    break;
    }
}


echo $isPalindrom;

?>