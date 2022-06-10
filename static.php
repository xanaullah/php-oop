<?php   
 class A{
     public static $name="sana ullah";
     public static function  show(){
         echo "Your name".self::$name;

     }
 }
 A::show();
 A::$name;


?>