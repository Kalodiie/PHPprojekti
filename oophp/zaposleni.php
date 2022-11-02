<?php
include_once "vezba.php";
    class Zaposleni{
        protected $ime;
        protected $plata;

        function __construct($ime,$plata)
        {
            $this->ime=$ime;
            $this->plata=$plata;
            date_default_timezone_set("Europe/Belgrade");
        }
        public function stigao(){
            echo "Zaposleni $this->ime stigao je u ".date("h:i:s")."<br/>";
        }


    }

?>