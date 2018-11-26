<?php


class PaginaController {

    private $paginaDAO;

    public function __construct() {
        $this->paginaDAO = new PaginaDAO;
    }

    //    ***************************************METODOS DAO DO PAINEL**************************************************
    public function Cadastrar(Pagina $pagina) {
        if (strlen($pagina->getTitulo()) > 3 && $pagina->getCategoria() != '' && $pagina->getSubcategoria() != '' && strlen($pagina->getStatus()) > 0 && strlen($pagina->getStatus()) <= 3 && strlen($pagina->getDescricao()) > 10 && $pagina->getThumb() != ''):
            return $this->paginaDAO->Cadastrar($pagina);
        else:
            return false;
        endif;
    }

    public function Atualizar(Pagina $pagina) {
        return $this->paginaDAO->Atualizar($pagina);
    }

    public function ListarPagina($inicio = null, $quantidade = null) {
        return $this->paginaDAO->ListarPagina($inicio, $quantidade);
    }
    
    //listagem da pizza pela categoria
    public function ListarPaginaCAt($categoria) {
        return $this->paginaDAO->ListarPaginaCAt($categoria);
    }
    
    public function retornaPaginaCat($cod) {
        return $this->paginaDAO->retornaPaginaCat($cod);
    }
    
    //quantidades de paginas
    public function RetornaQtdPagina() {
        return $this->paginaDAO->RetornaQtdPagina();
    }

    public function retornaPaginaImagem($cod) {
        return $this->paginaDAO->retornaPaginaImagem($cod);
    }

    public function Excluir($cod) {
        if ($cod > 0):
            return $this->paginaDAO->Excluir($cod);
        else:
            return false;
        endif;
    }
    
    //retorna dados do pagina atraves do cod
    public function retornaIdPagina($cod) {
        if ($cod > 0):
            return $this->paginaDAO->retornaIdPagina($cod);
        else:
            return false;
        endif;
    }
    //retorna dados do pagina atraavés do url
    public function retornaUrlPagina($url) {
        return $this->paginaDAO->retornaUrlPagina($url);
    }

    public function AlterarImagem($cod, $thumb) {
        return $this->paginaDAO->AlterarImagem($cod, $thumb);
    }
    
    public function BuscarPagina($termo = null, $tipo = null) {
        return $this->paginaDAO->BuscarPagina($termo, $tipo);
    }
    
//    ***************************************METODOS DAO DO SITE**************************************************
    public function ListaPaginaCategoria($categoria, $inicio = null, $quantidade = null) {
        return $this->paginaDAO->ListaPaginaCategoria($categoria, $inicio, $quantidade);
    }
    
    public function PaginaCategoria($categoria) {
        return $this->paginaDAO->PaginaCategoria($categoria);
    }
    
    public function ListarTodosPaginas() {
        return $this->paginaDAO->ListarTodosPaginas();
    }

}
