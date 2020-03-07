 <?php
	error_reporting(-1);
	
	$regexp = '/[Д|д][ ]{0,1}[У|у][ ]{0,1}[Р|р|P|p][ ]{0,1}[А|а|A|a][ ]{0,1}[К|к|K|k]/u';
	$text_to_search_fool = 'ты — д у р а к';
	$text_replacement = preg_replace($regexp, 'дурак', $text_to_search_fool);
	
?>