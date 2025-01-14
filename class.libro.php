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

        public function setID(int $i){ $this->id = $i; }

        public function obtenerLibro(int $id){
            $consulta = "SELECT titulo FROM libros WHERE id = '$id'";
            $sentencia = $this->conn->getConn()->prepare($consulta);
            $sentencia->execute();
            $sentencia->bind_result($this->titulo);

            $sentencia->fetch();
            $libro = $this->titulo;
            return $libro;
        }
        
        public function obtenerLibros(){
            $nomAutor = "";
            $sentencia = "SELECT titulo, nombre, disponible, id FROM libros, autores WHERE dni = autor";
            $consulta = $this->conn->getConn()->prepare($sentencia);
            $consulta->execute();
            $consulta->bind_result($this->titulo, $nomAutor, $this->disponible, $this->id);

            $libros = array(); // Array para almacenar los libros
            while ($consulta->fetch()) {
                // Crear un array asociativo para cada libro
                $libro = array(
                    "titulo" => $this->titulo,
                    "autor" => $nomAutor,
                    "disponible" => $this->disponible,
                    "id" => $this->id
                );

                // Añadir el libro al array de libros
                $libros[] = $libro;
            }

            return $libros;
        }

        public function modificarLibro(){
            $sentencia = "UPDATE libros SET titulo = ?, autor = ?, disponible = ? WHERE id = ?";
            $consulta = $this->conn->getConn()->prepare($sentencia);
            $consulta->bind_param("ssii", $this->titulo, $this->autor, $this->disponible, $this->id);
            $consulta->execute();
        }

        public function borrarLibro(){
            $sentencia = "DELETE FROM libros WHERE id = ?";
            $consulta = $this->conn->getConn()->prepare($sentencia);
            $consulta->bind_param("i", $this->id);
            $consulta->execute();
        }
    }
?>