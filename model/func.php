<?php
include 'conexao.php';
include 'controller/controlFunc.php'
// Funções CRUD para cada tabela
function createFuncionario($conn) {
    // Exemplo de inserção na tabela Funcionario
    $sql = "INSERT INTO Funcionario (rgFunc, nome, dt_adm, salario, FKCargo, nome_fantasia)
            VALUES ($rgFunc, $nomeFunc, $dataFunc, salarioFunc, 1, $nomeFanFunc)";
    if ($conn->query($sql) === TRUE) {
        echo "Novo funcionário criado com sucesso!";
    } else {
        echo "Erro ao criar funcionário: " . $conn->error;
    }
}

function readFuncionario($conn) {
    // Exemplo de leitura da tabela Funcionario
    $sql = "SELECT * FROM Funcionario";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["idFuncionario"] . " - Nome: " . $row["nome"] . " - RG: " . $row["rg"] . "<br>";
        }
    } else {
        echo "0 resultados";
    }
}

function updateFuncionario($conn) {
    // Exemplo de atualização na tabela Funcionario
    $sql = "UPDATE Funcionario SET nome='Maria Clara' WHERE idFuncionario=1";
    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar registro: " . $conn->error;
    }
}

function deleteFuncionario($conn) {
    // Exemplo de deleção na tabela Funcionario
    $sql = "DELETE FROM Funcionario WHERE idFuncionario=1";
    if ($conn->query($sql) === TRUE) {
        echo "Registro deletado com sucesso!";
    } else {
        echo "Erro ao deletar registro: " . $conn->error;
    }
}

// Executar função com base no botão clicado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($_POST['action']) {
        case 'createFuncionario':
            createFuncionario($conn);
            break;
        case 'readFuncionario':
            readFuncionario($conn);
            break;
        case 'updateFuncionario':
            updateFuncionario($conn);
            break;
        case 'deleteFuncionario':
            deleteFuncionario($conn);
            break;
        // Adicione outros casos para outras tabelas aqui
    }
}

// Fechar conexão
$conn->close();
?>