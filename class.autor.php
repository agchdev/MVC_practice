<?php
    require_once('class.db.php');
    class autor{
        public $conn;
        public $nombre;
        public $dni;

        public function __construct(String $n = "", String $d = ""){
            $this->conn = new db();
            $this->nombre = $n;
            $this->dni = $d;
        }
    }
?>