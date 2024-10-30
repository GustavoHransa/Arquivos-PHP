<?php

class Biblioteca{

    const servidor = 'localhost';
    const usuario = 'root';
    const senha ='';
    const banco_de_dados ='biblioteca2';

    public static function emprestar($usuario,$livro){
        $livro->emprestar($usuario);
        $usuario ->emprestar($livro);
        
    }

    public static function devolver($livro,$usuario){
        $livro ->devolver();
        $usuario -> devolver($livro);
    }

    public static function conexao(){

        return $conexao = mysqli_connect(self::servidor,self::usuario,self::senha,self::banco_de_dados);

    }
    public static function cadastrarLivro($livro){

        self::conexao()->query($livro->criar());
        self::conexao()->close();

    }

    public static function atualizarLivro($livros ,$valores){

        self:: conexao()->query($livro->atualizar($valores));
        self:: conexao()->close();
    }


    // criando um objeto dessa conexão
    

 

}