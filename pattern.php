         <!-- *  
     * * 
    * * * 
  * * * * 
* * * * *   -->
<?php

// for($i=1;$i<=5;$i++){
//     for($j=$i;$j>=5;$j--){
//         echo "*";
//     }
//     echo "<br>";
// }


// * 
// * * 
// * * * 
// * * * * 
// * * * * * 


// 1 
// 2 2 
// 3 3 3 
// 4 4 4 4 
// 5 5 5 5 5 

// for($i=1;$i<=5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo "$i";
//     }
//     echo "<br>";
// }


// 1 
// 2 3 
// 4 5 6 
// 7 8 9 10 
// 11 12 13 14 15 



// $n=1;
// for($i=1;$i<=5;$i++){
//     for($j=1;$j<=$i;$j++){
//       echo $n, "&nbsp;";
//       $n++;
//     }
//     echo "<br>";
// }



// A 
// B B 
// C C C 
// D D D D 
// E E E E E 


// for($i=1;$i<=5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo chr(64+$i);
//     }
//     echo "<br>";
// }



// A 
// B C 
// D E F 
// G H I J 
// K L M N O 



// $n=1;
// for($i=1;$i<=5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo chr(64+$n);
//         $n++;
//     }
//     echo "<br>";
// }



// E
// DD
// CCC
// BBBB
// AAAAA


// for($i=5;$i>=1;$i--){
//     for($j=5;$j>=$i;$j--){
//         echo chr(64+$i);
//     }
//     echo "<br>";
// }



// $k=1;  
// foreach(range('A','Z') as $char){  
//     for($i=5; $i>=$k; $i--){  
//             echo $char;  
//         }  
//         echo "<br>";  
//         $k=$k+1;  
//     }




// ABCDE
// ABCD
// ABC
// AB
// A

// for($i=5;$i>=1;$i--){
//     for($j=1;$j<=$i;$j++){
//         echo chr(64+$j);
//     }
//     echo "<br>";
// }




// A
// AB
// ABC
// ABCD
// ABCDE


// for($i=1;$i<=5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo chr(64+$j);
//     }
//     echo "<br>";
// }





// *
// **
// ***
// ****
// *****
// *****
// ****
// ***
// **
// *

// for($i=1;$i<=5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }

// for($i=4;$i>=1;$i--){
//     for($j=1;$j<=$i;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }




// *
// ***
// *****
// *******
// *********    



// for($i=1;$i<=5;$i++){
//     for($space=1;$space<=(5-$i);$space++){
//         echo "&nbsp";
//     }
//     for($j=1;$j<=(2*$i-1);$j++){
//         echo "*";
//     }
//     echo "<br>";
// }




// for($i=5;$i>=1;$i--){
//     for($space=1;$space<=(5-$i);$space++){
//         echo "&nbsp";
//     }
//     for($j=1;$j<=2*$i-1;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }



// *
// ***
// *****
// *******
// *********
// *******
// *****
// ***
//  *

// for($i=1;$i<=5;$i++){
//     for($space=1;$space<=(5-$i);$space++){
//         echo "&nbsp";
//     }
//     for($j=1;$j<=(2*$i-1);$j++){
//         echo "*";
//     }
//     echo "<br>";
// }
// for($i=4;$i>=1;$i--){
//     for($space=1;$space<=(4-$i);$space++){
//         echo "&nbsp";
//     }
//     for($j=1;$j<=2*$i-1;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }




// *
// **
// ***
// ****
// *****
// *****
// ****
// ***
// **



// for($i = 1; $i <= 5; $i++)
// {
//     for($j = 1; $j <= $i; $j++)
//     {
//         echo  "*";
//     }
//     echo "<br>";
// }
// for($i = ; $i >= 1; $i--)
// {
//     for($j = 1; $j <= $i; $j++)
//     {
//         echo "*" ;
//     }
//     echo "<br>";
// }





// $m=2;
// for($i=1;$i < 10;$i++){
//     if( $i <= 5 ){
//         for($j=1;$j <= $i;$j++){
//             echo "*";
//          }
//     }
//     if( $i > 5 ){
//         for($k=1;$k <=($i - $m);$k++){
//             echo "*";
//         }
//         $m = $m + 2; 
//     }      
//     echo "<br>";     
// }




// function tree($arr){
//     if(empty($arr['child']));
//     return $arr['name'];

//     return $arr['name'] " .tree($arr['child']);
// }
// tree(chuchan);


// function tree($arr){
//     if(empty($arr['child'])){
//     return $arr['name']
// }else{
//     return $arr['name']
// }

// }
// tree("harsh");


// function display($number) {    
//     if($number<=5){    
//      echo "$number <br/>";    
//      display($number+1);    
//     }  
// }    
    
// display(1);    




// function factorial($n)    
// {    
//     if ($n < 0)    
//         return -1;    
//     if ($n == 0)    
//         return 1;    
//     return ($n * factorial ($n -1));    
// }    
    
// echo factorial(5); 






?>
