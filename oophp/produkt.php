<!-- Povezivanje klasa SUPERCLASS i SUBCLASS (Roditelj i dete) -->
<?php
    class Product{
        public $title;
        public $price;
        public function __construct($title,$price){
            $this->title=$title;
            $this->price=$price;

        }
        public function getInfo(){
            return "Title: {$this->title}, price {$this->price}.";
        }
    }
    class Dvd extends Product{
        public $language;
        public function __construct($title,$price,$language){
            parent::__construct($title,$price);
            $this->language=$language;
        }
        public function getInfo()       //Da bi se ispisivao bez funkcije, naziv mora biti __ToString()
        {
            return parent::getInfo()." language = ".$this->language;
        }
    }

    $d1 = new Dvd("The Godfather: Part II",8.5,"en");
    echo $d1->getInfo();

?>