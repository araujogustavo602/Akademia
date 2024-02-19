<?php
 
    class Modalidade
    {
        private $title;
        private $descricao;
        private $caminho;
 
        public function __construct(){}
 
        public function create($_title, $_descricao, $_caminho)
        {
            $this->title = $_title;
            $this->descricao = $_descricao;
            $this->caminho = $_caminho;
        }
 
        public function listarModalidade()
        {
           try
           {
                include("./db/conn.php");
 
                $sql = "CALL modalidade()";
                $data = $conn->query($sql)->fetchAll();
 
                return $data;
           }
           catch (Exception $e)
           {
               return false;
           }
        }
    }
 
?>