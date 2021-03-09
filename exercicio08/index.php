<?php

require_once 'livro.php';
require_once 'pessoa.php';
require_once 'interface.php';

function getPessoas()
{
    $pessoas = array();

    $pessoa1 = new Pessoa('André Luiz', '24', 'Masculino');
    $pessoa1->getNome();
    $pessoa1->getSexo();
    $pessoa1->getIdade();
    $pessoas[] = $pessoa1;

    $pessoa2 = new Pessoa('Luiza Alves', '20', 'Feminino');
    $pessoa2->getNome();
    $pessoa2->getSexo();
    $pessoa2->getIdade();
    $pessoas[] = $pessoa2;

    $pessoa3 = new Pessoa('Jorge Henrique', '28', 'Masculino');
    $pessoa1->getNome();
    $pessoa1->getSexo();
    $pessoa1->getIdade();
    $pessoas[] = $pessoa3;

    return $pessoas;
}

function getLivros($leitores)
{
    $livros = array();

    $livro1 = new Livro('Titulo 01', 'Autor 01', '94', '15', false, $leitores[0]);
    $livro1->getTitulo();
    $livro1->getAutor();
    $livro1->getTotPag();
    $livro1->getPagAtual();
    $livro1->getAberto();
    $livro1->getLeitor();
    $livros[] = $livro1;

    $livro2 = new Livro('Titulo 02', 'Autor 02', '42', '05', true, $leitores[1]);
    $livro2->getTitulo();
    $livro2->getAutor();
    $livro2->getTotPag();
    $livro2->getPagAtual();
    $livro2->getAberto();
    $livro2->getLeitor();
    $livros[] = $livro2;

    $livro3 = new Livro('Titulo 03', 'Autor 03', '120', '31', true, $leitores[2]);
    $livro3->getTitulo();
    $livro3->getAutor();
    $livro3->getTotPag();
    $livro3->getPagAtual();
    $livro3->getAberto();
    $livro3->getLeitor();
    $livros[] = $livro3;

    $livro4 = new Livro('Titulo 04', 'Autor 04', '150', '75', false, $leitores[0]);
    $livro4->getTitulo();
    $livro4->getAutor();
    $livro4->getTotPag();
    $livro4->getPagAtual();
    $livro4->getAberto();
    $livro4->getLeitor();
    $livros[] = $livro4;

    return $livros;
}
$pessoa = new Pessoa('André Luiz', 24, 'Masculino');
$livro = new Livro('Titulo 01', 'Autor 01', 94, 15, false, $pessoa);

echo $livro->getPagAtual() . "</br>";
$livro->folhear(20);
echo $livro->getPagAtual();
$livro->detalhar();




