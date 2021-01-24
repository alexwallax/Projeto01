<?php

    class db {
        private $host = 'localhost';
        private $usuario = 'root';
        private $senha = '';
        private $database = 'projeto1';
    
        public function conecta_mysql(){
            //criar a conexão
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
            
            //charset utf8
            mysqli_set_charset($con, 'utf8');
            
            //verificar erro de conexão
            if (mysqli_connect_errno()) {
                echo "Erro ao tentar se conectar com o BD". mysqli_connect_error();
            }
            return $con;
            
        }
        
    }




?>

