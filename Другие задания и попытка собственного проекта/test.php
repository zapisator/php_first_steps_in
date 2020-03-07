<?php
	error_reporting(-1);
	mb_internal_encoding("UTF-8");
	
	echo "<plaintext>";
	$text_inbound = '«Grammar Nazi». Напиши скрипт,проверяющий текст на наличие злостных ошибок: 
	Нет пробела после запятой, точки с запятой, восклицательного знака, вопросительного знака, 
	двоеточия. «жы» или «шы» написано с буквой ы. В тексте есть слово «координально» или «сдесь», 
	«зделал», «зделаю», «зделан». В тексте есть слова «а» или «но» без запятой перед ними. (можешь 
	добавить еще несколько правил, если хорошо знаешь русский язык) В случае обнаружения ошибки скрипт 
	должен писать сообщение об этом и выводить кусок текста с ошибкой (чтобы было понятно, что не так). 
	Если ты сделал задачу про Grammar Nazi, сделай скрипт, которы вместо сообщения об ошибках будет молча их исправлять.';
	
	$regexp_space = '/ /';
	// $text_splited_into_words = preg_split($regexp_space, $text_inbound, $limit = null, $flags = null);
	$matches = array ();
	$regexp_grammar = '/[\w][.|,|?|!|:|;|-][\w]|жы|шы|координально|сдесь|зделал|зделаю|зделан| а | но /ui';
	
	preg_match_all($regexp_grammar, $text_inbound, $matches, PREG_OFFSET_CAPTURE );
	
	
	echo $text_inbound."\n______\n";
	echo "Длина этого текста составляет ".strlen($text_inbound)." однобайтных символов\n";
	echo "Длина этого текста составляет ".mb_strlen($text_inbound)." многобайтных символов\n\n\n";
	
	
	for ($i=0; $i <= 7; $i++) {
		$match_length = mb_strlen ($matches[0][$i][0]);
		$utfPosition = mb_strlen(substr($text_inbound, 0, $matches[0][$i][1]), 'utf-8');
		//echo "\$match_length:".$match_length."\n";
		$left_error = (string) mb_substr($text_inbound, $utfPosition - 15, 15);
		//echo "\$left_error:".$left_error."\n";
		//echo "\$matches[0][$i][0]:".$matches[0][$i][0]."\n";
		$right_error = (string) mb_substr($text_inbound, $utfPosition + $match_length, 15);
		//echo "\$right_error:".$right_error."\n";
		//echo "\$matches[0][$i][1]:".$matches[0][$i][1]."\n";
		//echo "Ошибка: ".$left_error."[".$matches[0][$i][0]."]".$right_error." В строке ".$matches[0][$i][1]."\n\n";
		//echo mb_substr($text_inbound, 0, $matches[0][$i][1] )."\n\n";
		
		echo "Ошибка: ".$left_error."[".$matches[0][$i][0]."]".$right_error."\nВ строке ".$utfPosition."\n\n";
		
		
		
			
	}
	
	
?>