<?php
function AreefCheckAnagrams($str1, $str2){
	if(count_chars($str1, 1) == count_chars($str2, 1)){
    	return 'yes';
    }else{
    	return 'no';
    }

}


$str1 = "gynere";
$str2 = "enegry";

echo AreefCheckAnagrams($str1, $str2);
?>
