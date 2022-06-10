<?php

use PhpParser\Node\Stmt\Return_;

class  calculation{
    public $a , $b , $c , $name ,  $age;
    function __construct($name="No Name"  , $age=0)
    {
      echo "Your Name:  ".$this->name=$name.'<br>';
      echo "Your Age: " . $this->age=$age;
    }
    Public  function sum(){
        $this->y=$this->a+$this->b;
        echo $this->y;
    }
    public function sub(){
        $this->z=$this->b-$this->a;
          return $this->z;
     
    }
    
}
$c1= new calculation();
$c1->name="sana Ullah";
$c1= new calculation(   );
$c1->sum();
echo $c1->sum(). '<br>';
$c1->a=1;
$c1->b=199;
echo $c1->sum().'<br>';
$c1->sub();

echo $c1->sub().'<br>' ;


class person{
    public $name ,  $age;
    public  function show(){
        return 'Name:'.$this->name . '-'. 'Age' . $this->age;
    }

}
$person=new person();
$person->age=21;
$person->name="Sana ullah";
echo $person->show();
?>