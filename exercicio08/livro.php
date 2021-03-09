<?php

require_once 'interface.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct($titulo, $autor, $totPaginas, $pagAtual, $aberto, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = $pagAtual;
        $this->aberto = $aberto;
        $this->leitor = $leitor;
    }

    function detalhar() {
        echo 'O nome do livro é ' . $this->titulo;
        echo '</br>O nome do autor é ' . $this->autor;
        echo '</br>A página atual lida é ' . $this->pagAtual;
        echo '</br>O leitor é ' . $this->leitor->getNome();
    }
    
    function abrir() {
        $this->aberto = true;
    }

    function fechar() {
        $this->fechado = false;
    }

    function folhear($pagina) {
        $this->pagAtual = $pagina;
    }

    function avancarPag() {
        $this->pagAtual = $this->pagAtual + 1;
    }

    function voltarPag() {
        $this->pagAtual = $this->pagAtual - 1;
    }
    
    function setTitulo() {
        $this->titulo = $titulo;
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function setAutor() {
        $this->autor = $autor;
    }
    
    function getAutor() {
        return $this->autor;
    }

    function setTotPag() {
        $this->totPaginas = $totPaginas;
    }

    function getTotPag() {
        return $this->totPaginas;
    }

    function setPagAtual() {
        $this->pagAtual = $pagAtual;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function setAberto() {
        $this->aberto = $aberto;
    }

    function getAberto() {
        return $this->aberto;
    }

    function setLeitor() {
        $this->leitor = $leitor;
    }

    function getLeitor() {
        return $this->leitor;
    }
}
