<?php 
class employee{
    public $name;
   public $age;
    public $salary;
    public $ta=1000;
    public $phone="300";
    public $totalsalary;
    function __construct($n ,  $g , $s){
        $this->name=$n;
        $this->age=$g;
        $this->salary=$s;
    }
   
    function info(){
        echo "<h1>Employee Profile</h1>";
        echo "Name of The Employee:".$this->name.'<br>';
        echo "Age of the Employee:".$this->age.'<br>';
        echo "Salary of the employee".$this->salary;
    
}
}
class manager extends employee{
   
    function info(){
        echo "<h1>Manager  Profile</h1>";
         echo "Salary of the manager:" . $this->totalsalary=$this->ta+$this->phone+$this->salary."<BR>";
        echo "Age of the Employee:".$this->age.'<br>';
        echo "Salary of the employee".$this->salary;
    
}

}
$m1=new manager("Sana Ullah" , 25 , 55);
$m1->info();
$em1 =new employee("Sana" , 25 , 55);
$em1->info();
class A{
    public $name;
    public function test(){
        echo $this->name;
    }
}
class B extends A{
    public function get(){
        echo "Inhereted Data".$this->name.'<BR>';
    }
}
$test1 =new A();
$test1->name="WEQEWQEWQEWQEWQEQWEQW fdsdfsdfdsfsd";
$test1->test();
$test2= new B();
$test2->get();
?>