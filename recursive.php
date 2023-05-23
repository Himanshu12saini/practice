<?php

// $arr = ["name"=>"Kabita", "child" => ["name"=>"Himanshu", "child"=>[]]];
// function tree($arr){

//     print_r($arr);
//     if(count($arr['child']) == 0)
//         return $arr['name'];

//     return $arr['name'] .">>" .  tree($arr['child']);
// }
// echo "<pre>";

// print_r($arr);

// echo tree($arr);



function NaturalNumbers($number) {    
    if($number<=10){    
    echo "$number <br/>";    
    NaturalNumbers($number+1);    
    }  
    }    
     
    NaturalNumbers(1);  
   
?>