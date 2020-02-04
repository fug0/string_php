<meta charset="utf-8">
<?php 
	
	error_reporting(-1);

	function mb_strrev($str){
    	$resultStr = '';
    	for ($i = mb_strlen($str); $i>=0; $i--) {
        	$resultStr .= mb_substr($str, $i, 1);
    	}
    	return $resultStr;
	}

	$string = "А роза упала на лапу Азора";
	$stringOutput = $string;
	$string = str_replace(' ', '', $string);
	$string = mb_strtolower("$string");
	$stringReverse = mb_strrev("$string");
	
	if ($string == $stringReverse) {
		echo "Строка \"$stringOutput\" является палиндромом.";
	}
	else {
		echo "Строка \"$stringOutput\" не является палиндромом.";
	}