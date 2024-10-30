<?php

    class Usuario{
    protected $nome;
    protected $cep;
    protected $qntd_livros = [];
    const MAX_EMPRESTIMO = 3;


    public function __contruct( $nome,$cep){
        $this -> nome=$nome;
        $this -> cep=$cep;
        
    }
    
    public function emprestar($livro){
        if(count($this->livros_emprestados) < self :: MAX_EMPRESTIMO){
            array_push($this->livros_emprestados,$livros);
            return;

        }
    }

    public function devolver($livro){
        if(in_array($livro,$this->livros_emprestados)){
            $livro->devolver_livros();
            $position= array_searce($livro,$this->livros_emprestados);
            unset($this-> qtd_livros [$position]);


        }
    }

    public function criar($nome){
        return "insert into usuario(nome,cep) values (".$this->nome.",".$this->cep.");";
    }
    public function ler(){
        return "select * from usuario where nome= ".$this->nome.";";
    }
    public function atualizar(){
        return "update usuario set nome=".$nome_atualizado. "where nome=".$this->nome.";";
        }
    public function deletar(){
        return "delete nome from usuario where=".$this->nome.";";
    }
}


    


  
