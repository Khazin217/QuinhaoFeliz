<?php
class Paginas extends Controller{
    public function index(){
      $dados = ['titulo'=>'Quinhão Feliz',
                 'descricao'=> ''
               ];
        $this->view('pagina/home', $dados);
    }
    public function sobre(){
      $dados = ['titulo'=>'Sobre nós...',
                'descricao'=>'Esta aula é sobre PHP 
                 orientado a objetos com MVC'];
     $this->view('pagina/sobre', $dados);
    }
    public function cadastro(){
      $dados = ['titulo'=>'Sobre nós...',
                'descricao'=>'Esta aula é sobre PHP 
                 orientado a objetos com MVC'];
     $this->view('pagina/cadastro', $dados);
    }

}//fim da classe Paginas

?>