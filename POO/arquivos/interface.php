<?php

interface Veiculo {
    // Método para ligar o veículo
    public function ligar();

    // Método para desligar o veículo
    public function desligar();
}

class Carro implements Veiculo {
    public function ligar() {
        echo "Ligando o carro...\n";
    }

    public function desligar() {
        echo "Desligando o carro...\n";
    }
}

class Moto implements Veiculo {
    public function ligar() {
        echo "Ligando a moto...\n";
    }

    public function desligar() {
        echo "Desligando a moto...\n";
    }
}

interface Formulario {
    public function validar();
    public function salvar();
}

class FormularioUsuario implements Formulario {
    public function validar() {
        // Lógica de validação para formulário de usuário
    }

    public function salvar() {
        // Lógica de salvar dados do usuário no banco de dados
    }
}

interface Pagamento {
    public function processarPagamento();
}

class PagamentoCartao implements Pagamento {
    public function processarPagamento() {
        // Lógica para processar pagamento com cartão de crédito
    }
}

class PagamentoBoleto implements Pagamento {
    public function processarPagamento() {
        // Lógica para processar pagamento com boleto bancário
    }
}



___________________________________________________________________________________________


class Produtos{
    public $nome;
    public $preco;
    public $descriacao;
    public $quantidade;

    public function __contruct( $nome,$preco,$descricao,$quantidade){
        $this -> nome = $nome;
        $this -> preco = $preco;
        $this -> descricao = $descricao;
        $this -> quantidade = $quantidade;
    }

    public function getInfo(){
    
         echo "nome: ".$this->nome.

    }
}

_________________________________________-



interface ICadastro {
    public function cadastrar();
}

class Usuario implements ICadastro {
    const MAX_EMPRESTIMO = 3;
    public $nome;
    public $idade;
    public $livrosEmprestados = 0;

    public function cadastrar() {
        // Lógica para cadastrar um usuário
        echo "Usuário cadastrado com sucesso!\n";
    }
}

class Livro implements ICadastro {
    public $titulo;
    public $autor;
    public $disponivel = true;

    public function cadastrar() {
        // Lógica para cadastrar um livro
        echo "Livro cadastrado com sucesso!\n";
    }

    public function emprestimo(Usuario $usuario) {
        if ($this->disponivel && $usuario->livrosEmprestados < Usuario::MAX_EMPRESTIMO) {
            $this->disponivel = false;
            $usuario->livrosEmprestados++;
            echo "Livro emprestado com sucesso!\n";
        } else {
            echo "Empréstimo não permitido.\n";
        }
    }

    public function devolucao() {
        $this->disponivel = true;
        echo "Livro devolvido com sucesso!\n";
    }
}

class Biblioteca {
    private static $usuarios = [];
    private static $livros = [];

    public static function emprestarLivro(Usuario $usuario, Livro $livro) {
        $livro->emprestimo($usuario);
    }

    public static function devolverLivro(Livro $livro) {
        $livro->devolucao();
    }

    // Outros métodos para listar usuários, livros, etc.
}


$usuario1 = new Usuario();
$usuario1->nome = "João";
$usuario1->idade = 25;
$usuario1->cadastrar();

$livro1 = new Livro();
$livro1->titulo = "O Senhor dos Anéis";
$livro1->autor = "J.R.R. Tolkien";
$livro1->cadastrar();

Biblioteca::emprestarLivro($usuario1, $livro1);