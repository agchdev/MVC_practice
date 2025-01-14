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

        public function obtenerAutores(){
            $consulta = "SELECT * FROM autores";
            $sentencia = $this->conn->getCon()->prepare($consulta);
            $sentencia->execute();
            $sentencia->bind_result($this->nombre, $this->dni);

            $autores = array();

            while($sentencia->fecth()){
                $autor = array(
                    "nombre" => $this->nombre,
                    "dni" => $this->dni
                );

                $autores[] = $autor;
            }

            return $autores;
        }
    }
?>