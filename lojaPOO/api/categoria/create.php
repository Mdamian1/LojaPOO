<?php
header('Content-type:application/json');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    require_once "../../model/Categoria.php";
    require_once "../../model/CategoriaDAO.php";

    header('Content-type: application/json');

    $dadosRecebidos = file_get_contents('php://input');

    $dados = json_decode($dadosRecebidos, true);

    $nome = $dados['nome'];
    $descricao = $dados['descricao'];

    $categoria = new Categoria($nome, $descricao);
    $catdao = new CategoriaDAO();

    if($catdao->insert($categoria)){
        echo json_encode(['msg'=>'Inserido com sucesso']);
    }else{
        echo json_encode(['msg'=>'Não foi possível inserir']);

    }
}else{
    echo json_encode(['msg'=>'Metodo não suportado']);
}