<?php

class Livros {
    
    public $titulo;
    public $autor;
    public $genero;
    public $status="Disponivel";

    public function cadastrar() {
        // Lógica para cadastrar um usuário
        echo "Usuário cadastrado com sucesso!\n";
    }

    public function __contruct($titulo,$autor,$genero){
        $this -> titulo = $titulo;
        $this -> autor = $autor;
        $this -> genero = $genero;
            
    }


    public function emprestar (){

        if($this ->status !="Disponivel"){
            echo"Já está Disponivel";
            return;
        }

        $this -> status = "indisponivel";
        $this -> usuario = $usuario;

    }
    public function devolver (){
        if($this->status=="Disponivel"){
            echo"já ta aqui";
            return;
        }
        $this->status="disponivel";
        $this->usuario=null;
    }

    public function criar (){
        return $query = 'insert into livro(titulo,autor,genero,status_livro) values ("'.$this->titulo.'","'.$this->autor.'","'.$this->genero.'","'.$this->status.'",")';
       
    }
    public function ler (){
        echo"select * from livro where titulo=".$this->titulo.";";
    }


    public function atualizar($valores){
        $query= 'update livro set';
        $colunasArray = array_keys($valores);


        for($contador = 0; $contador < count($valores); $contador++){
            $coluna = $colunasArray[$contador];
            $valor = $valores[$coluna];
    
            $query .=$contador !=(count($valores)-1)?
            $coluna.'="'.$valor.'",':$coluna .'="'.$valor.'" ';
    
        }

        return $query .= 'where titulo ="'.$this->titulo.'";';

        }

    public function deletar (){
        echo"delete * from livro where titulo=".$this->titulo.";";
    }

}


