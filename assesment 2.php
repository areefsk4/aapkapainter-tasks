<?php  

function AreefCricketStrikes($arr){
        $p1 = 0;
        $p2 = 0;
        $batting = 'p1';
      foreach($arr as $val){  
      // add runs to the batting player
        $$batting = $$batting + $val;
        //if player score odd number switch player
        if($val % 2 != 0){
           if($batting == 'p1'){
              $batting = 'p2';
           }else{
              $batting = 'p1';
           }
        }
      }
      return  "player1 : $p1 -- player2 : $p2";
}

//Initialize array   
$arr = array(1,2,3,2,1); 


echo AreefCricketStrikes($arr);
?> 