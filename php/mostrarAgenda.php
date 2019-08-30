<?php 
    require "conexao.php";
    if(isset($_POST["nomePesquisa"])){
        $nomePesquisa=$_POST["nomePesquisa"];
        
        $queryIdNome="select id_cliente from cliente where nome LIKE '%".$nomePesquisa."%'";

        $resultadoIdNome=$conexao->query($queryIdNome);
        
        if($resultadoIdNome->num_rows>0){

            while($idsNome=$resultadoIdNome->fetch_assoc()){
                    $query = "select id_agenda,id_horario_data,regiao,id_cliente,compareceu from agenda where id_cliente=".$idsNome["id_cliente"];
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
                            $compareceu=$registro["compareceu"]==1?'checked':'';
                            $alteracao=$registro["compareceu"]==1?0:1;
                            $resultadoData = $conexao->query($queryData);

                            while($registroData = $resultadoData->fetch_assoc()){
                                $querySelectNomeU = "select nome from cliente where id_cliente ='".$registro['id_cliente']."'";
                                $resultadoNome = $conexao->query($querySelectNomeU);

                                while($nomeReg = $resultadoNome->fetch_assoc()){
                                    echo 
                                    "<tr>
                                        <td style= 'text-align: center; 
                                                border: 1px solid black;'>".$nomeReg["nome"]."</td>
                                        <td style= 'text-align: center; 
                                                border: 1px solid black;'>".$registroData["data"]."</td>
                                        <td style= 'text-align: center; 
                                                border: 1px solid black;'>".$horario."</td>
                                        <td style= 'text-align: center; 
                                                border: 1px solid black;'>".$registro["regiao"]."</td>
                                        <td style= 'text-align: center; 
                                                border: 1px solid black;'><input type='checkbox' onclick='checkBox(".$registro['id_agenda'].", ".$alteracao.")'".$compareceu."></td>
                                    </tr>";
                                }
                            }
                        }  
                    }else{
                        echo "<h3 style='text-align:center;'>Nenhum Resultado Encontrado</h3>";
                        break; 
                    }
            }
        }else{
            echo "<h3 style='text-align:center;'>Nenhum Resultado Encontrado</h3>";
        }
    }else{
        $queryAgenda = "select id_agenda,id_horario_data,regiao,id_cliente,compareceu from agenda";
            
        $resultadoAgenda = $conexao->query($queryAgenda);

        if($resultadoAgenda->num_rows>0){
            echo "<script> function checkBox(i,j){ window.location.href='indexAdmin.php?id_agenda='+i+'&alteracao='+j; } </script>";

            while($registroAgenda = $resultadoAgenda->fetch_assoc()){

                $queryIdDataHora = "SELECT id_data, TIME_FORMAT(horario, '%H:%i') AS horarioF FROM datahora WHERE id_horario_data=".$registroAgenda["id_horario_data"];

                $resultadoIdDataHora = $conexao->query($queryIdDataHora);

                while($registroIdDataHora = $resultadoIdDataHora->fetch_assoc()){

                    $horario = $registroIdDataHora["horarioF"];

                    $id_data = $registroIdDataHora["id_data"];
                }

                $queryData= "SELECT DATE_FORMAT(data, '%d/%m/%Y') as data from datas where id_data=".$id_data." ORDER BY data AS";

                $compareceu=$registroAgenda["compareceu"]==1?'checked':'';

                $alteracao=$registroAgenda["compareceu"]==1?0:1;

                $resultadoData = $conexao->query($queryData);

                while($registroData = $resultadoData->fetch_assoc()){

                    $queryNome = "SELECT nome from cliente where id_cliente =".$registroAgenda['id_cliente'];

                    $resultadoNome = $conexao->query($queryNome);

                    while($registroNome = $resultadoNome->fetch_assoc()){
                        echo 
                            "<tr>
                                <td style= 'text-align: center; 
                                    border: 1px solid black;'>".$registroNome["nome"]."</td>
                                <td style= 'text-align: center; 
                                    border: 1px solid black;'>".$registroData["data"]."</td>
                                <td style= 'text-align: center; 
                                    border: 1px solid black;'>".$horario."</td>
                                <td style= 'text-align: center; 
                                    border: 1px solid black;'>".$registroAgenda["regiao"]."</td>
                                <td style= 'text-align: center; 
                                    border: 1px solid black;'><input type='checkbox' onclick='checkBox(".$registroAgenda['id_agenda'].", ".$alteracao.")'".$compareceu."></td>
                                </tr>";
                    }
                }
            }
        }
    }

?>