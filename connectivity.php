<?php
if 
(isset($_POST["button"])){
  
$a= $_POST["first_digit"];
//$b= $_GET["second_digit"];
//$c= $_GET["third_digit"];
//$d= $_GET["fourth_digit"];
//$b= $_GET["sdigit"];
//$c= $a + $b;
//echo "the sum of $a and $b is $c";
//if ($a%2==0) {
//echo "number is even";
//}
//else{
  //  echo"number is odd";
//}
//}
}
//----------------------------------------------------------------
 /*for($i=2; $i<$a; $i++) {
  if($a%$i==0)
  $flag =1;
  break;
 }
 error_reporting(E_ERROR | E_PARSE);
 if($flag==1)
 {
  echo"not prime";
 }
 else {
  echo"this is prime";
//-----------------------------------------------------------
5!=5*4*3*2*1


 }*/                                                        



//

 //echo $a*$i;
 //echo'<br>';

//}
//

 //--------------------------------------------------------------- 
//function factorial($a) {
  //if ($a<=1) {
   // return 1;
  //}
  //else {
  //  return $a* factorial($a-1);
  //}
//}
//echo "the factorial of $a is" . factorial($a);

//-------------------------------------------------------------

/*function fact($a) {

  if($a<=1) {
    return 1;
  }
  else {
    return $a*fact($a-1);
  }
}
echo"the factorial of $a is ". fact($a);
*/
// --------------------------------------------------------------------- 
//armstrong number........

//if (($b*$b*$b) + ($c*$c*$c)+ ($d*$d*$d)== $a) {
//echo "$a is armstrong number";
//}
  

 //else { 
  //echo "$a is not armstrong number";
  //}
 // function armstrongCheck($a){
    
 //   $x = $a; 
  //  while($x != 0) 
  //  { 
  //      $rem = $x % 10; 
    //    $sum = $sum + $rem*$rem*$rem; 
    //    $x = $x / 10; 
   // } 
     
    // if true then armstrong number
   // if ($a == $sum)
   //     return 1;
     
    // not an armstrong number   
 //   return 0;   
//}

 
// Driver Code
//$number = 407;
//$flag = armstrongCheck($a);
//if ($flag == 1)
//    echo "Yes";
//else
 //   echo "No"
 //   $sum(3,7);


 /*function number($a) {
$sum =0;
 $x= $a;
 while($x != 0) {
$rem = $x %10;
$sum = $sum + ($rem*$rem*$rem);
$x= $x/10;
 }
 if ($sum==$a) {
  echo"number is armstrong number";
 }
 else {
  echo"number is not armstrong number";
 }

 }
 number($a);*/
//------------------------------------------------------------------------------------------------
//*************************perfect square-----------------------------------------
 /*$i=0;
for($i=0; $i<$a; $i++) {
  if ($i*$i==$a) 
  {
    echo"$a is perfect square number";
  }
  
    
  
   
 // }


}*/

for($i=0; $i<=$a; $i++){
  for($j=$a-$i; $j>$i; $j--){
    echo"*";
  }
  echo'<br>';
}
 
?>
