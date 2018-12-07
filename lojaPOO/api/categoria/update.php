<?php

header('Content-type:application/json');
if($_SERVER['REQUEST_METHOD'] == 'PUT'){

    require_once "../../model/Categoria.php";
    require_once "../../model/CategoriaDAO.php";

    $dadosRecebidos = file_get_contents('php://input');

    $dados = json_decode($dadosRecebidos, true);

    $id = $dados['id'];
    $nome = $dados['nome'];
    $descricao = $dados['descricao'];

    $categoria = new Categoria($nome, $descricao, $id);
    $catdao = new CategoriaDAO();

    if($catdao->update($categoria)){
    echo json_encode(['msg'=>'Atualizado com sucesso']);
    }else{
        echo json_encode(['msg'=>'Não foi possível atualizar']);
    }
}else{
    echo json_encode(['msg'=>'Metodo não suportado']);
}