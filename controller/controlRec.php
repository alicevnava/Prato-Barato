<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        cadastrarRec();
    }

    function cadastrarRec(){
        $nomeRec = $_POST['nomeRec'];
        $modoRec = $_POST['modoRec'];
        $dataRec = $_POST['dataRec'];
        $porcoesRec = $_POST['porcoesRec'];
        $nomeFanFunc = $_POST['nomeFanFunc'];
        
    }




?>