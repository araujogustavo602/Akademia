<?php

    class Usuario
    {
        private $nome;
        private $email;
        private $dtNascimento;
        private $cidade;
        private $senha;

        public function __construct(){}

        public function create($_nome, $_email, $_dtNascimento, $_cidade, $_senha) {
            $this->nome = $_nome;
            $this->email = $_email;
            $this->dtNascimento = $_dtNascimento;
            $this->cidade = $_cidade;
            $this->senha = md5($_senha);
        }
    
        public function getNome() {
            return $this->nome;
        }

        public function getEmail() {
            return $this->email;
        }
        
        public function getDtNascimento() {
            return $this->dtNascimento;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setNome($_nome) {
            $this->nome = $_nome;
        }

        public function setEmail($_email) {
            $this->email = $_email;
        }

        public function setDtNascimento($_dtNascimento) {
            $this->dtNascimento = $_dtNascimento;
        }

        public function setCidade($_cidade) {
            $this->cidade = $_cidade;
        }

        public function setSenha($_senha) {
            $this->senha = $_senha;
        }

        public function inserirUsuario() {

            include_once('./db/conn.php');
            $sql = "CALL piUsuario(:nome, :email, :dtNascimento, :cidade, :senha)";

            $data = [
                'nome' => $this->nome,
                'email' => $this->email,
                'dtNascimento' => $this->dtNascimento,
                'cidade' => $this->cidade,
                'senha' => $this->senha
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;
        }

        public function listarUsuario() {
            include_once('./db/conn.php');
            $sql = "CALL psListarUsuario('')";

            $data = $conn->query($sql)->fetchAll();

            return $data;
        }

        public function excluirUsuario($_id) {
            include_once("./db/conn.php");
            $sql = "CALL pdUsuario(:id)";

            $data = [
                'id' => $_id
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;
        }

        public function conectarUsuario($_usuario, $_senha) {
            include_once("./db/conn.php");
            $senha = md5($_senha);
            $sql = "CALL psLoginUsuario('$_usuario', '$senha')";
            $statement = $conn->prepare($sql);
            
            $statement->execute();
            
            if ($user = $statement->fetch()) {
                return true;
            }
            
            else {
                return false;
            }
        }
        
        public function buscarUsuario($_id)
        {
            include("./db/conn.php");

            $sql = "CALL psUsuario('$_id')";
            $data = $conn->query($sql)->fetchAll();

            foreach ($data as $item) {
                $this->nome = $item["nome"];
                $this->email = $item["email"];
                $this->dtNascimento = $item["dtNascimento"];
                $this->cidade = $item["cidade"];
                $this->senha = $item["senha"];
            }

            return true;

        }

        public function atualizarUsuario($_id)
        {
            include("./db/conn.php");
            $sql = "CALL puUsuario(:id, :nome, :email, :dtNascimento, :cidade, :senha)";

            $data = [
                'id' => $_id,
                'nome' => $this->nome,
                'email' => $this->email,
                'dtNascimento' => $this->dtNascimento,
                'cidade' => $this->cidade,
                'senha' => $this->senha
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;
        }
    }
?> 