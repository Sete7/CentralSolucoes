<?php

require_once './inc/header.php';

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

$arrayPaginas = array(
    "dashboard" => "View/dashboard.phtml",
    "user" => "View/User/user.phtml",
    "editarUser" => "View/User/editarUser.phtml",
    "categoria" => "View/Categoria/categoria.phtml",
    "categoriaListar" => "View/Categoria/listaCategoria.phtml",
    "categoriaEditar" => "View/Categoria/editarCat.phtml",
    "sub" => "View/Subcategoria/subcategoria.phtml",
    "listarSubcategoria" => "View/Subcategoria/listarSubcategoria.phtml",
    "editarSubcategoria" => "View/Subcategoria/editarSubcategoria.phtml",
    "pagina" => "View/Pagina/pagina.phtml",
    "listarPagina" => "View/Pagina/listarPagina.phtml",
    "editarPagina" => "View/Pagina/editarPagina.phtml",
    "galeriaPagina" => "View/Pagina/galeriaPagina.phtml",
    "listarTipo" => "View/TipoReceita/listarTipo.phtml",
    "slider" => "View/Slider/slider.phtml",
    "listSlider" => "View/Slider/listSlider.phtml",
    "updateSlider" => "View/Slider/updateSlider.phtml",
    "updateThumb" => "View/Slider/updateThumb.phtml"
);

if ($pagina) {
    $encontrou = false;

    foreach ($arrayPaginas as $page => $key) {
        if ($pagina == $page) {
            $encontrou = true;
            require_once($key);
        }
    }

    if (!$encontrou) {
        require_once("View/dashboard.phtml");
    }
} else {
    require_once("View/dashboard.phtml");
}

require_once './inc/footer.php';
