 <?php
	error_reporting(-1);
	
	
	echo "<plaintext>";
	function countCredit($debt, $percentMonthly, $commision) {
		for ($month = 1; $debt >=5000 ;$month++) {
			$debt = $debt*(1+$percentMonthly/100)+$commision-5000;
			if ($debt <= 5000) {
			$spends = round(5000 * $month + $debt, 2);
			$overSpends = $spends - 39999;
			echo "Затраты составили {$spends} за {$month} месяцев.\n";
			echo "Переплата составила {$overSpends}.\n\n";
			}
		}
		return $month-1;
	}
	
	$debt = 39999;
	$percentMonthly = 4; 
	$commision = 500;
	$i = countCredit($debt, $percentMonthly, $commision);
	
	$debt = 39999;
	$percentMonthly = 3; 
	$commision = 1000;
	$i = countCredit($debt, $percentMonthly, $commision);

	$debt = 39999+7777*2;
	$percentMonthly = 2; 
	$commision = 0;
	$i = countCredit($debt, $percentMonthly, $commision);
	
?>