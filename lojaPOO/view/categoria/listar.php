

<h1>Lista de Categorias</h1>
<button><a href="index.php?acao=incluir">Nova categoria</a></button>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
<?php
    $categorias = $dados['categorias'];
    foreach ($categorias as $categoria){
        echo '<tr>';
        echo '<td>'.$categoria->getId().'</td>';
        echo '<td><a href="index.php?acao=detalhes&id='.$categoria->getId().'">'.$categoria->getNome().'</a></td>';
        echo '<td>'.$categoria->getDescricao().'</td>';
        echo '</tr>';
    }
?>
    </tbody>
</table>


