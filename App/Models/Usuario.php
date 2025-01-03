<?php

class Usuario{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }  //fim do construtor
    public function armazenar($dados){
        $this->db->query("INSERT INTO usuarios(nome, email, senha) VALUES (:nome, :email, :senha)");

        $this->db->bind('nome', $dados['nome']);
        $this->db->bind('email', $dados['email']);
        $this->db->bind('senha', $dados['senha']);
        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }//fim da funcão armazenar

    public function checarEmail($email){
        $this->db->query("SELECT email FROM usuarios WHERE email = :e");
        $this->db->bind(":e", $email);
        if($this->db->resultado()):
            return true;
        else:
            return false;
        endif;
    }//fim da função checarEmail

    public function checarLogin($email, $senha){
        $this->db->query("SELECT * FROM usuarios WHERE email = :e");
        $this->db->bind(":e", $email);
       if($this->db->resultado()):
            $resultado = $this->db->resultado();
            if(password_verify($senha, $resultado->senha)):
                return $resultado;
            else:
                return false;
            endif;
        else:
            return false;
        endif;
    }
}//fim da classe Usuario