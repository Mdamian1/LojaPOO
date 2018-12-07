<?php

require_once "../../model/Categoria.php";
require_once "../../model/CategoriaDAO.php";

$dadosRecebidos = file_get_contents('php://input');

$dados = json_decode($dadosRecebidos, true);

$nome = $dados['nome'];
$descricao = $dados['descricao'];

$categoria = new Categoria($nome, $descricao);
$catdao = new CategoriaDAO();

$catdao->insert($categoria);