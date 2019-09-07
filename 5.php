<?php

function count_vowels($str){
	$re = '/[aiueo]/';
	preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
	return sizeof($matches);
}

$str = 'programmer';
$str1 = 'hmmmm';


echo count_vowels($str);
echo count_vowels($str1);

?>