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

        public function obtenerAutor(int $id){
            $consulta = "SELECT * FROM autores WHERE dni = '$id'";
            $sentencia = $this->conn->getConn()->prepare($consulta);
            $sentencia->execute();
            $sentencia->bind_result($this->dni, $this->nombre);

            $autor = array();
            $autor[] = $this->dni;
            $autor[] = $this->nombre;
            return $autor;
        }

        public function obtenerAutores(){
            $consulta = "SELECT * FROM autores";
            $sentencia = $this->conn->getConn()->prepare($consulta);
            $sentencia->execute();
            $sentencia->bind_result($this->dni, $this->nombre);

            $autores = array();

            while($sentencia->fetch()){
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