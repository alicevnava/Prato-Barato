<?php

include 'conexao.php'


// Função para limpar dados de entrada
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Inserir Receita
if (isset($_POST['create'])) {
    $nome_rec = clean_input($_POST['nome_rec']);
    $fkcozinheiro = clean_input($_POST['fkcozinheiro']);
    $dt_criacao = clean_input($_POST['dt_criacao']);
    $fkCategoria = clean_input($_POST['fkCategoria']);
    $modo_preparo = clean_input($_POST['modo_preparo']);
    $num_porcao = clean_input($_POST['num_porcao']);
    $descricao = clean_input($_POST['descricao']);
    $ind_inedita = clean_input($_POST['ind_inedita']);

    $sql = "INSERT INTO Receita (nome_rec, FKcozinheiro, dt_criacao, FKCategoria, modo_preparo, num_porcao, descricao, ind_inedita) 
            VALUES ('$nome_rec', '$fkcozinheiro', '$dt_criacao', '$fkCategoria', '$modo_preparo', '$num_porcao', '$descricao', '$ind_inedita')";

    if ($conn->query($sql) === TRUE) {
        echo "Nova receita criada com sucesso.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Atualizar Receita
if (isset($_POST['update'])) {
    $idReceita = clean_input($_POST['idReceita']);
    $nome_rec = clean_input($_POST['nome_rec']);
    $fkcozinheiro = clean_input($_POST['fkcozinheiro']);
    $dt_criacao = clean_input($_POST['dt_criacao']);
    $fkCategoria = clean_input($_POST['fkCategoria']);
    $modo_preparo = clean_input($_POST['modo_preparo']);
    $num_porcao = clean_input($_POST['num_porcao']);
    $descricao = clean_input($_POST['descricao']);
    $ind_inedita = clean_input($_POST['ind_inedita']);

    $sql = "UPDATE Receita SET nome_rec='$nome_rec', FKcozinheiro='$fkcozinheiro', dt_criacao='$dt_criacao', 
            FKCategoria='$fkCategoria', modo_preparo='$modo_preparo', num_porcao='$num_porcao', 
            descricao='$descricao', ind_inedita='$ind_inedita' WHERE idReceita='$idReceita'";

    if ($conn->query($sql) === TRUE) {
        echo "Receita atualizada com sucesso.";
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}

// Deletar Receita
if (isset($_POST['delete'])) {
    $idReceita = clean_input($_POST['idReceita']);

    $sql = "DELETE FROM Receita WHERE idReceita='$idReceita'";

    if ($conn->query($sql) === TRUE) {
        echo "Receita deletada com sucesso.";
    } else {
        echo "Erro ao deletar: " . $conn->error;
    }
}

// Fechar conexão
$conn->close();
?>