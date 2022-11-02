<!-- Rad sa staticnim tipovima, i njihov pristup -->
<?php
    class MyClass{
        public static $count=0;
        public static function plusOne(){
            self::$count++;     //self - ukazuje na sebe
        }
    }
    $newObj = new MyClass;
    $newObj->plusOne(); //Poziv metode koja povecava vrednost staticne promenljive
    $newObj->plusOne();
    echo MyClass::$count;   //Da bi pristupili staticnoj promenljivoj moramo koristiti SCOPE RESOLUTION (::) operator pracen sa $ pa naziv staticne

?>