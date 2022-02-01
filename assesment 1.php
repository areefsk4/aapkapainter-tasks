<?php  

function AreefDuplicateFirstOccurance($arr){
	$lenth = count($arr);
	$sum_of_positions = NULL;
	$firstoccurance = NULL;

    for($i= 0; $i < $lenth; $i++){
        for($j = $i + 1; $j < $lenth; $j++){
            if($arr[$i] == $arr[$j]){
                $sum_of_indexs = $j + $i;
                if($sum_of_positions == NULL){
                    $sum_of_positions = $sum_of_indexs;
                    $firstoccurance = $arr[$i];
                }else if($sum_of_positions > $sum_of_indexs){
                    $sum_of_positions = $sum_of_indexs;
                    $firstoccurance = $arr[$i];
                }

            }
        }
    } 

	return $firstoccurance;

}

//Initialize array   
$arr = array(1, 2, 3, 2, 4, 4, 1);   

echo AreefDuplicateFirstOccurance($arr);
?>