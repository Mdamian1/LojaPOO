<?php

require_once "../../model/Categoria.php";
require_once "../../model/CategoriaDAO.php";

$dadosRecebidos = file_get_contents('php://input');

$dados = json_decode($dadosRecebidos, true);

$id = $dados['id'];

$catdao = new CategoriaDAO();

$catdao->delete($id);