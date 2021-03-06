 <?php
 
error_reporting(-1);

$correctNumbers = [ 
  '+74951234567',
  '+ 7 999 123 4567',
  '84951234567',
  '8-495-1-234-567',
  ' 8 (8122) 56-56-56',
  '8-911-1234567',
  '8 (911) 12 345 67',
  '8-911 12 345 67',
  '8 (911) - 123 - 45 - 67',
  '8 ( 999 ) 1234567',
  '8 999 123 4567'
];
$incorrectNumbers = [
  '02', 
  '84951234567 позвать люсю', 
  '849512345', 
  '849512345678', 
  '8 (409) 123-123-123', 
  '7900123467', 
  '5005005001', 
  '8888-8888-88',
  '84951a234567', 
  '8495123456a', 
  '+1 234 5678901', /* неверный код страны */
  '+8 234 5678901', /* либо 8 либо +7 */
  '7 234 5678901' /* нет + */
];

$regexp = '/^
(([+]( |-|\)|\(){0,3}7)|(( |-|\)|\(){0,3}8))
(( |-|\)|\(){0,3}\d)(( |-|\)|\(){0,3}\d)(( |-|\)|\(){0,3}\d)
(( |-|\)|\(){0,3}\d)(( |-|\)|\(){0,3}\d)(( |-|\)|\(){0,3}\d)
(( |-|\)|\(){0,3}\d)(( |-|\)|\(){0,3}\d)(( |-|\)|\(){0,3}\d)
(( |-|\)|\(){0,3}\d){0,1}
$/';

$regexp2 = '/( |-|\)|\()/';
$regexp3 = '/\+7/';

foreach ($correctNumbers as $subject) {
	$justNumber1 = preg_replace($regexp2, "", $subject);
	$justNumber = preg_replace($regexp3, "8", $justNumber1);
	echo " После 2 прохода: {$justNumber}\n";
}

?>