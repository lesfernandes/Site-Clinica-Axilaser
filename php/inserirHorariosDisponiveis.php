<?php
    include_once "conexao.php";

    $horario = $_POST["horario"];
    $id_data = $_POST["id_data"];

    $horariosArray = explode(',', $horario);

    foreach ($horariosArray as $valores) {
        $query = "INSERT INTO datahora VALUES (NULL,'".$id_data."','".$valores."', 0, 0)";

        $resultado = $conexao->query($query);

        if($resultado){
            echo "<script language='javascript' type='text/javascript'>alert('Horários adicionados com sucesso!'); window.location.href='../cadastroSessaoAdmin.php';</script>";

        }
    }

?>