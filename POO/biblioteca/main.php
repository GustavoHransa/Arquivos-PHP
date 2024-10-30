<?php
require "livro.php";
require "usuario.php";
require "biblioteca.php";

use Livros as livro;
use Usuario as usuario;

$dom_casmurro = new Livros ("Dom casmurro","Machado de assis","Romance");

Biblioteca :: cadastrarLivro($dom_casmurro);
/*Biblioteca :: atualizarLivro($dom_casmurro,[
    "titulo" => '1984',
    "autor" => 'George Orwell',
    "genero" => 'Ficção' 
]);*/
   






