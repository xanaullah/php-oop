<?php
class  base{
public function calc($a , $b){
    return $a+$b;
}
}
 
class dervived extends base{
    public function calc($a , $b)
    {
     return $a*$b.'<br>';
    }
 }
$derived= new dervived();
echo  $derived->calc(4 , 6);
// $base= new base();
// echo $base->calc(5 , 6);

?>