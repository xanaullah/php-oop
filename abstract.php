
<?php
abstract class base{
    public $name;
    abstract protected function calc($a , $b);
}
class derived extends base{
    public function calc($c , $d){
        echo $c+$d;
    }
}
 $obj= new derived();
 $obj->calc(22 , 22);
?>