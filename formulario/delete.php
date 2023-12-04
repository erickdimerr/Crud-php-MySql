<?php

    if(!empty($_GET['nome']))
    {
        include_once('config.php');

        $nome = $_GET['nome'];

        $sqlSelect = "SELECT *  FROM atletas WHERE nome='$nome'";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM atletas WHERE nome='$nome'";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: remover.php');
   
?>