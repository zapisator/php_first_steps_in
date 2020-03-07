<?php
error_reporting(-1);

$pass_VIN = [ 
  'JM6CP10S2002013421',
  'ЫM6CP10S200201343',
  'yM6CP10S200201344',
  'OM6CP10S200201345',
  'JM6CP10S20020134J',
  'JM6CP10S200201342',
  'Ыy6CP10Q20020134J1',
];
$base_VIN = [ 
  'JM6CP10S200201345',
];

$regexp = [
	'Знаков не 17' => '/^.{17}$/u',
	'Есть символы, отличные от латинских букв или цифр' => '/^[a-zA-Z0-9]*$/u',
	'Есть строчные буквы' => '/^[^a-z]*$/u',
	'Есть буквы I, O или Q' => '/[^(I|O|Q)]{17}/',
	'Последние 4 знака -- не цифры' => '/[\d]{4}$/',
];

function vin_check ($array_VIN, $regexp) {
	$i=1;
	foreach ($array_VIN as $value_base) {
		echo "{$i}).  {$value_base}:\n";
		$j = 1;
		foreach ($regexp as $key => $value_reg) 		{
			if (preg_match($value_reg, $value_base)) {
			} 
			else
				echo "Ошибка №{$j}. {$key}.\n";
			$j++;
		}
		$i++;
	}
}

echo "Паспорт:\n";
vin_check ($pass_VIN, $regexp);

echo "База:\n";
vin_check ($base_VIN, $regexp);

function get_longest_common_subsequence($string_1, $string_2)
{
$string_1_length = strlen($string_1);
$string_2_length = strlen($string_2);
$return = '';

$longest_common_subsequence = array();
$longest_common_subsequence = array_fill(0, $string_1_length, array_fill(0, $string_2_length, 0));
$largest_size = 0;

if ($string_1_length === $string_2_length)
{
return $return;
}

for ($i = 0; $string_1_length; $i++)
{
	for ($j = 0; $string_2_length; $j++) {
	if ($string_1[$i] === $string_2[$j]) {
		if ($i === 0 || $j === 0) {
			$longest_common_subsequence[$i][$j] = 1;
		}
		else {
			$longest_common_subsequence = $longest_common_subsequence[$i - 1][$j - 1] + 1;
		}
		if ($longest_common_subsequence[$i][$j] > $largest_size) {
			$largest_size = $longest_common_subsequence[$i][$j];
			$return = '';			
		}
		if ($longest_common_subsequence[$i][$j] === $largest_size) {
			$return = substr($string_1, $i - $largest_size + 1, $largest_size);			
		}
	}		
	}
	return $return;
}




}



?>
