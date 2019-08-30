<?php 

    include "conexao.php";

    $id = $_SESSION["id"];
    $query = "select regiao, id_horario_data from agenda where id_cliente = ".$id."";
    
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){
        while($registro = $resultado->fetch_assoc()){
                $queryIdData_Hora = "select id_data, TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_horario_data=".$registro["id_horario_data"];
                $resultadoIdData_Hora = $conexao->query($queryIdData_Hora);
                while($registroIdData_Horario = $resultadoIdData_Hora->fetch_assoc()){
                    $horario = $registroIdData_Horario["horarioF"];
                    $id_data = $registroIdData_Horario["id_data"];
                }
                $queryData= "select DATE_FORMAT(data, '%d/%m/%Y') as data from datas where id_data=".$id_data." ORDER BY data ASC";
                $resultadoData = $conexao->query($queryData);
                while($registroData = $resultadoData->fetch_assoc()){
     
                echo 
                "<tr>
                    <td class='tabelaSessoesCelula'>".$registroData["data"]."</td>
                    <td class='tabelaSessoesCelula'>".$horario."</td>
                    <td class='tabelaSessoesCelula'>".$registro["regiao"]."</td>
                </tr>";
            }
        }
    }



