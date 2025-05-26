<?php
        class Usuario {
            private $id;
            private $name;
            private $email;
            private $senhaHash;
            private $dataCadastro;
        }

        public function __constructor($name, $email, $senhaHash){
            $this->name = $name;
            $this->email = $email;
            $this->senhaHash = $senhaHash;
            $this->dataCadastro = ;
        }

?>