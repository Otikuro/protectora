<?php
    class Adopcion extends Crud {
        private $id;
        private $idAnimal;
        private $idUsuario;
        private $fecha;
        private $razon;
        private $conexion;
        private const $TABLA;

        /**
         * ??????????
         */
        public function __construct () {

        }

        public function __set (mixed $variabel, mixed $datum) {
            $this->$variable = $datum;
        }

        public function __get (mixed $variable) {
            return $this->$variable;
        }


        public function crear () {
            $connection = new Conexion ();
            $statement = $connection->prepare("INSERT INTO adopcion VALUES :id, :idAnimal, :idUsuario, :fecha, :razon");

            $statement->bindParam(":id", $this->id);
            $statement->bindParam(":idAnimal", $this->idAnimal);
            $statement->bindParam(":idUsuario", $this->idUsuario);
            $statement->bindParam(":fecha", $this->fecha);
            $statement->bindParam(":razon", $this->razon);

            $statement->execute($statement);
        }

        public function actualizar () {
            $connection = new Conexion ();
            $statement = $connection->prepare("INSERT INTO adopcion VALUES :id, :idAnimal, :idUsuario, :fecha, :razon");

            $statement->bindParam(":id", $this->id);
            $statement->bindParam(":idAnimal", $this->idAnimal);
            $statement->bindParam(":idUsuario", $this->idUsuario);
            $statement->bindParam(":fecha", $this->fecha);
            $statement->bindParam(":razon", $this->razon);

            $statement->execute($statement);
        }
    }
?>