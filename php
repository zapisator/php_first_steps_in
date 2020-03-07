<?php
	error_reporting(-1);

	$anonDice1 = mt_rand(1,6);
	$anonDice2 = mt_rand(1,6);
	$compDice1 = mt_rand(1,6);
	$compDice2 = mt_rand(1,6);

	echo "У вас выпали {$anonDice1} и {$anonDice2} \n
		У компьютера выпали {$compDice1} и {$compDice2} \n ";

	$anonSum = ($anonDice1 + $anonDice2);
	$compSum = ($compDice1 + $compDice2);
	
	if (($anonDice1 == $anonDice2) && ($compDice1 == $compDice2))	{	
		echo "2 дабла - тебя ждёт большая удача. Запости скриншот!!!\n";
		exit ();
	}
	
	if ($anonSum > $compSum) {
		echo "Вы победили!";
	}
		elseif ($anonSum == $compSum) {
			echo "Ничья!";
		}
			else {
				echo "Вы проиграли!";			
			}		
?>