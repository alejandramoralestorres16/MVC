<?php
    class Alumno
    {
        private $id;
        private $Nombre;
        private $Apellido;
        
        private $Correo;
        private $Foto;
        private $FechaNacimiento;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }