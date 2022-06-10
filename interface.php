<?php 
interface A{
    function calc($a ,  $b);
}
interface B{
    function sub($a , $b);
} 
class parent1 implements A , B{
    function calc($a,  $b)
    {
        echo $a+$b;
    }
    function sub($a , $b){
            echo $a-$b;
    }

}
$obj = new  parent1();
$obj->calc(8 , 6);
?>  
<br> 
<?php
$obj->sub(8 , 6);

?>