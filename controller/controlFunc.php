<?php
    include 'model/func.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        cadastrarRec();
    }

    function cadastrarRec(){
        $nomeFunc = $_POST['nomeFunc'];
        $rgFunc = $_POST['rgFunc'];
        $dataFunc = $_POST['dataFunc'];
        $salarioFunc = $_POST['salarioFunc'];
        $descricaoRec = $_POST['descricaoRec'];
        creteFuncionario();
    }




?>