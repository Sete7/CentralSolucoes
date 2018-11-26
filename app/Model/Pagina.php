<?php

require_once 'Categoria.php';
require_once 'Subcategoria.php';

class Pagina {

    private $cod;
    private $titulo;
    private $categoria;
    private $subcategoria;
    private $url;
    private $descricao;
    private $status;
    private $thumb;
    private $data;

    public function __construct() {
        $this->categoria = new Categoria();
        $this->subcategoria = new Subcategoria();
    }

    function getCod() {
        return $this->cod;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getSubcategoria() {
        return $this->subcategoria;
    }

    function getUrl() {
        return $this->url;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getStatus() {
        return $this->status;
    }

    function getThumb() {
        return $this->thumb;
    }

    function getData() {
        return $this->data;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setSubcategoria($subcategoria) {
        $this->subcategoria = $subcategoria;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }

    function setData($data) {
        $this->data = $data;
    }

}
