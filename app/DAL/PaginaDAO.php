<?php

require_once 'Banco.php';

class PaginaDAO {

    private $debug;
    private $pdo;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    /*     * ****************************** PAINEL ADMINISTRATIVO ********************************** */

    public function Cadastrar(Pagina $pagina) {
        try {
            $sql = "INSERT INTO pagina (titulo, categoria,  subcategoria, url, descricao,   status, thumb, data) "
                    . "VALUES (:titulo, :categoria, :subcategoria, :url, :descricao, :status, :thumb, :data)";
            $param = array(
                ":titulo" => $pagina->getTitulo(),
                ":categoria" => $pagina->getCategoria(),                
                ":subcategoria" => $pagina->getSubcategoria(),
                ":url" => $pagina->getUrl(),
                ":descricao" => $pagina->getDescricao(),                
                ":status" => $pagina->getStatus(),
                ":thumb" => $pagina->getThumb(),
                ":data" => $pagina->getData()
                
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function Atualizar(Pagina $pagina) {
        try {

            $sql = "UPDATE pagina SET titulo = :titulo, categoria = :categoria, subcategoria = :subcategoria, 
                url = :url, descricao = :descricao, status = :status, data = :data WHERE cod = :cod";

            $param = array(
                ":cod" => $pagina->getCod(),
                ":titulo" => $pagina->getTitulo(),                                
                ":categoria" => $pagina->getCategoria(),
                ":subcategoria" => $pagina->getSubcategoria(),
                ":url" => $pagina->getUrl(),
                ":descricao" => $pagina->getDescricao(),                
                ":status" => $pagina->getStatus(),
                ":data" => $pagina->getData()
            );

            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM pagina WHERE cod = :cod";
            $param = array(":cod" => $cod);
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function ListarPagina($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT p.cod, p.titulo, p.categoria, p.subcategoria, p.url, p.descricao, p.status, p.thumb, p.data,"
                    . " c.cod as codCat, c.titulo as tituloCat, s.sub_cod as subCod, s.sub_titulo as subTitulo FROM pagina p "
                    . "INNER JOIN subcategoria s ON s.sub_cod = p.subcategoria "
                    . "INNER JOIN categoria c ON p.categoria = c.cod ORDER BY p.cod DESC LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );

            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listarPagina = [];

            foreach ($dt as $pts) {
                $pagina = new Pagina();
                $pagina->setCod($pts['cod']);
                $pagina->setTitulo($pts['titulo']);
                $pagina->setUrl($pts['url']);
                $pagina->setDescricao($pts['descricao']);                
                $pagina->setStatus($pts['status']);
                $pagina->setThumb($pts['thumb']);
                $pagina->setData($pts['data']);                
                $pagina->getCategoria()->setCod($pts['codCat']);
                $pagina->getCategoria()->setTitulo($pts['tituloCat']);
                $pagina->getSubcategoria()->setSub_cod($pts['subCod']);
                $pagina->getSubcategoria()->setSub_titulo($pts['subTitulo']);

                $listarPagina[] = $pagina;
            }
            return $listarPagina;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //quantidades de paginas
    public function RetornaQtdPagina() {
        try {
            $sql = "SELECT count(pr.cod) as total FROM pagina pr";
            $dr = $this->pdo->ExecuteQueryOneRow($sql);
            if ($dr["total"] != null):
                return $dr["total"];
            else:
                return 0;
            endif;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorno de pagina com imagem
    public function retornaPaginaImagem($cod) {
        try {
            $sql = "SELECT cod, titulo, thumb FROM pagina WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $pagina = new Pagina();
            $pagina->setCod($dt['cod']);
            $pagina->setTitulo($dt['titulo']);
            $pagina->setThumb($dt['thumb']);
            return $pagina;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorna dados do pagina através do cod
    public function retornaIdPagina($cod) {
        try {

            $sql = "SELECT 
                    c.cod as codCat, c.titulo as tituloCat, 
                    s.sub_cod as subCod, s.sub_titulo as subTitulo,                     
                    p.cod, p.titulo, p.categoria, p.subcategoria, p.url, p.descricao,
                    p.status, p.thumb, p.data FROM pagina p 
                    INNER JOIN categoria c ON p.categoria = c.cod
                    INNER JOIN subcategoria s ON s.sub_cod = p.subcategoria                     
                    WHERE p.cod = :cod";

            $param = array(":cod" => $cod);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $pagina = new Pagina();
            $pagina->setCod($pts['cod']);
            $pagina->setTitulo($pts['titulo']);
            $pagina->setUrl($pts['url']);
            $pagina->setDescricao($pts['descricao']);            
            $pagina->setStatus($pts['status']);
            $pagina->setThumb($pts['thumb']);
            $pagina->setData($pts['data']);            

            //retornando a 
            $pagina->getCategoria()->setCod($pts['codCat']);
            $pagina->getCategoria()->setTitulo($pts['tituloCat']);


            $pagina->getSubcategoria()->setSub_cod($pts['subCod']);
            $pagina->getSubcategoria()->setSub_titulo($pts['subTitulo']);


            return $pagina;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorna dados do pagina atraavés do url
    public function retornaUrlPagina($url) {
        try {

            $sql = "SELECT 
                    c.cod as codCat, c.titulo as tituloCat, 
                    s.sub_cod as subCod, s.sub_titulo as subTitulo,             
                    p.cod, p.titulo, p.categoria, p.subcategoria, p.url, p.descricao,
                    p.status, p.thumb, p.data FROM pagina p 
                    INNER JOIN categoria c ON p.categoria = c.cod
                    INNER JOIN subcategoria s ON s.sub_cod = p.subcategoria                     
                    WHERE p.url = :url AND p.status = 1";

            $param = array(":url" => $url);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $pagina = new Pagina();
            $pagina->setCod($pts['cod']);
            $pagina->setTitulo($pts['titulo']);
            $pagina->setUrl($pts['url']);
            $pagina->setDescricao($pts['descricao']);            
            $pagina->setStatus($pts['status']);
            $pagina->setThumb($pts['thumb']);
            $pagina->setData($pts['data']);
            
            //retornando a             
            $pagina->getCategoria()->setCod($pts['codCat']);
            $pagina->getCategoria()->setTitulo($pts['tituloCat']);

            $pagina->getSubcategoria()->setSub_cod($pts['subCod']);
            $pagina->getSubcategoria()->setSub_titulo($pts['subTitulo']);


            return $pagina;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function AlterarImagem($cod, $thumb) {
        try {
            $sql = "UPDATE pagina SET thumb = :thumb WHERE cod = :cod";
            $param = array(
                ":cod" => $cod,
                ":thumb" => $thumb
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function BuscarPagina($termo = null, $tipo = null) {
        try {
            $sql = "";            

            switch ($tipo) {
                case 1:
                    $sql = "SELECT 
                            c.cod as codCat, c.titulo as tituloCat, c.url as urlCat,
                            s.sub_cod as subCod, s.sub_titulo as subTitulo,                           
                            p.cod, p.titulo, p.categoria, p.subcategoria, p.url, p.descricao,
                            p.status, p.thumb, p.data FROM pagina p 
                            INNER JOIN subcategoria s ON s.sub_cod = p.subcategoria 
                            INNER JOIN categoria c ON p.categoria = c.cod                        
                            WHERE p.titulo LIKE :termo ORDER BY p.titulo ASC";
                    break;
                case 2:
                    $sql = "SELECT
                            c.cod as codCat, c.titulo as tituloCat, c.url as urlCat,
                            s.sub_cod as subCod, s.sub_titulo as subTitulo,                            
                            p.cod, p.titulo, p.categoria, p.subcategoria, p.url, p.descricao, 
                            p.status, p.thumb, p.data FROM pagina p 
                            INNER JOIN subcategoria s ON s.sub_cod = p.subcategoria 
                            INNER JOIN categoria c ON p.categoria = c.cod  
                            WHERE p.cod LIKE :termo ORDER BY p.cod ASC";
                    break;
            }

            $param = array(
                ":termo" => "%{$termo}%"
            );

            $dataTable = $this->pdo->ExecuteQuery($sql, $param);

            $listaPagina = [];

            foreach ($dataTable as $pts) {
                $pagina = new Pagina();
                $pagina->setCod($pts['cod']);
                $pagina->setTitulo($pts['titulo']);
                $pagina->setUrl($pts['url']);
                $pagina->setDescricao($pts['descricao']);                
                $pagina->setStatus($pts['status']);
                $pagina->setThumb($pts['thumb']);
                $pagina->setData($pts['data']);                

                $pagina->getCategoria()->setCod($pts['codCat']);
                $pagina->getCategoria()->setTitulo($pts['tituloCat']);
                $pagina->getCategoria()->setUrl($pts['urlCat']);

                $pagina->getSubcategoria()->setSub_cod($pts['subCod']);
                $pagina->getSubcategoria()->setSub_titulo($pts['subTitulo']);

                $listaPagina[] = $pagina;
            }

            return $listaPagina;
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }

    /*     * ****************************** SITE ********************************** */
    
    public function ListaPaginaCategoria($categoria, $inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT 
                    c.cod as codCat, c.titulo as tituloCat, c.url as urlCat,
                    s.sub_cod as subCod, s.sub_titulo as subTitulo,                    
                    p.cod, p.titulo, p.categoria, p.subcategoria, p.url, p.descricao, 
                    p.status, p.thumb, p.data FROM pagina p 
                    INNER JOIN subcategoria s ON s.sub_cod = p.subcategoria 
                    INNER JOIN categoria c ON p.categoria = c.cod   
                    WHERE p.categoria = :categoria AND p.status = 1 ORDER BY p.cod DESC LIMIT :inicio, :quantidade";

            $param = array(
                ":categoria" => $categoria,
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );

            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listarPagina = [];

            foreach ($dt as $pts) {
                $pagina = new Pagina();
                $pagina->setCod($pts['cod']);
                $pagina->setTitulo($pts['titulo']);
                $pagina->setUrl($pts['url']);
                $pagina->setDescricao($pts['descricao']);                
                $pagina->setStatus($pts['status']);
                $pagina->setThumb($pts['thumb']);
                $pagina->setData($pts['data']);

                $pagina->getCategoria()->setCod($pts['codCat']);
                $pagina->getCategoria()->setTitulo($pts['tituloCat']);
                $pagina->getCategoria()->setUrl($pts['urlCat']);

                $pagina->getSubcategoria()->setSub_cod($pts['subCod']);
                $pagina->getSubcategoria()->setSub_titulo($pts['subTitulo']);

                $listarPagina[] = $pagina;
            }
            return $listarPagina;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function PaginaCategoria($categoria) {
        try {

            $sql = "SELECT 
                    c.cod as codCat, c.titulo as tituloCat, c.url as urlCat,
                    s.sub_cod as subCod, s.sub_titulo as subTitulo,
                    p.cod, p.titulo, p.categoria, p.subcategoria, p.url, p.descricao, 
                    p.status, p.thumb, p.data FROM pagina p 
                    INNER JOIN subcategoria s ON s.sub_cod = p.subcategoria 
                    INNER JOIN categoria c ON p.categoria = c.cod  
                    WHERE p.categoria = :categoria AND p.status = 1 ORDER BY p.cod DESC";

            $param = array(
                ":categoria" => $categoria
            );

            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listarPagina = [];

            foreach ($dt as $pts) {
                $pagina = new Pagina();
                $pagina->setCod($pts['cod']);
                $pagina->setTitulo($pts['titulo']);
                $pagina->setUrl($pts['url']);
                $pagina->setDescricao($pts['descricao']);                
                $pagina->setStatus($pts['status']);
                $pagina->setThumb($pts['thumb']);
                $pagina->setData($pts['data']);

                $pagina->getCategoria()->setCod($pts['codCat']);
                $pagina->getCategoria()->setTitulo($pts['tituloCat']);
                $pagina->getCategoria()->setUrl($pts['urlCat']);

                $pagina->getSubcategoria()->setSub_cod($pts['subCod']);
                $pagina->getSubcategoria()->setSub_titulo($pts['subTitulo']);

                $listarPagina[] = $pagina;
               
            }
            return $listarPagina;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

}
