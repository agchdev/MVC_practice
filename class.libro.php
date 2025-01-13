<?php
    require_once('class.db.php');
    class libro{
        private $conn;
        private $id;
        private $titulo;
        private $autor;
        private $disponible;

        public function __construct(int $i = 0, String $tit = "", String $au = "", bool $dis = true){
            $this->conn = new db();
            $this->id = $i;
            $this->titulo = $tit;
            $this->autor = $au;
            $this->disponible = $dis;
        }
        
        public function obtenerLibros(){
            $sentencia = "SELECT titulo, autor, disponible FROM libros";
            $consulta = $this->conn->getConn()->prepare($sentencia);
            $consulta->execute();
            $consulta->bind_result($this->titulo, $this->autor, $this->disponible);

            $libros = array(); // Array para almacenar los libros
            while ($consulta->fetch()) {
                // Crear un array asociativo para cada libro
                $libro = array(
                    "titulo" => $this->titulo,
                    "autor" => $this->autor,
                    "disponible" => $this->disponible
                );

                // Añadir el libro al array de libros
                $libros[] = $libro;
            }

            return $libros;
        }
    }
?>