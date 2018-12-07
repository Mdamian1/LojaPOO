<?php
header('Content-type:application/json');
if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    require_once "../../model/Categoria.php";
    require_once "../../model/CategoriaDAO.php";

    $dadosRecebidos = file_get_contents('php://input');

    $dados = json_decode($dadosRecebidos, true);

    $id = $dados['id'];

    $catdao = new CategoriaDAO();

    if ($catdao->delete($id)){
        echo json_encode(['msg'=>'Excluido com sucesso']);
    }else{
        echo json_encode(['msg'=>'Não foi possível excluir']);

    }
}else{
    echo json_encode(['msg'=>'Metodo não suportado']);
}