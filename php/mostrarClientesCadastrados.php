<?php 
    require "conexao.php";
    $query = "select * from cliente";
            
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){ 

        while($registro = $resultado->fetch_assoc()){

            $queryAgenda = "select id_agenda,id_horario_data,regiao,id_cliente,compareceu from agenda where id_cliente=".$registro["id_cliente"];

                $resultadoAgenda = $conexao->query($queryAgenda);

                if($resultadoAgenda->num_rows>0){

                    while($registroAgenda = $resultadoAgenda->fetch_assoc()){

                        $queryIdDataHora = "select id_data, TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_horario_data=".$registroAgenda["id_horario_data"];

                        $resultadoIdDataHora = $conexao->query($queryIdDataHora);

                        while($registroIdDataHora = $resultadoIdDataHora->fetch_assoc()){

                            $horario = $registroIdDataHora["horarioF"];

                            $id_data = $registroIdDataHora["id_data"];
                        }

                        $queryData= "select DATE_FORMAT(data, '%d/%m/%Y') as data from datas where id_data=".$id_data." ORDER BY data ASC";

                        $compareceu=$registroAgenda["compareceu"]==1?'checked':'';

                        $alteracao=$registroAgenda["compareceu"]==1?0:1;

                        $resultadoData = $conexao->query($queryData);

                        while($registroData = $resultadoData->fetch_assoc()){
                            echo 
                                "<tr>
                                    <td style= 'text-align: center; 
                        border: 1px solid black;'>
                        <div class='opcoesDiv opcoesCliente' id='opcoesCli".$registro["id_cliente"]."' onMouseOver='mouseOver(".$registro["id_cliente"].")' onMouseOut='mouseOut(".$registro["id_cliente"].")'>
                            <a href='confirma.php?id_clienteC=".$registro["id_cliente"]."'>Apagar</a>
                        </div>
                        <span  class='spanHorario' onMouseOver='mouseOver(".$registro["id_cliente"].")'
                        onMouseOut='mouseOut(".$registro["id_cliente"].")' style='display:inline'>".$registro["nome"]."</span></td>
                                    <td style= 'text-align: center; 
                                            border: 1px solid black;'>".$registro["email"]."</td>
                                    <td style= 'text-align: center; 
                                            border: 1px solid black;'>".$registro["idade"]."</td>
                                    <td style= 'text-align: center; 
                                            border: 1px solid black;'>".$registro["telefone"]."</td>
                                    <td style= 'text-align: center; 
                                            border: 1px solid black;'>".$registro["laser"]."</td>
                                    <td style= 'text-align: center; 
                                            border: 1px solid black;'>".$registro["cadastro"]."</td>
                                    <td style= 'text-align: center; 
                                            border: 1px solid black;'>".$registroData["data"]."</td>
                                    <td style= 'text-align: center; 
                                            border: 1px solid black;'>".$horario."</td>
                                    <td style= 'text-align: center; 
                                            border: 1px solid black;'>".$registroAgenda["regiao"]."</td> 
                                    <td style= 'text-align: center; border: 1px solid black;'>
                                        <input type='checkbox' onclick='checkBox(".$registroAgenda['id_agenda'].", ".$alteracao.")'".$compareceu.">
                                    </td>          
                                </tr>";
                        }
                    }
                }else{
                    echo 
                        "<tr>
                            <td style= 'text-align: center; 
                        border: 1px solid black;'>
                        <div class='opcoesDiv opcoesCliente' id='opcoesCli".$registro["id_cliente"]."' onMouseOver='mouseOver(".$registro["id_cliente"].")' onMouseOut='mouseOut(".$registro["id_cliente"].")'>
                            <a href='confirma.php?id_clienteC=".$registro["id_cliente"]."'>Apagar</a>
                        </div>
                        <span  class='spanHorario' onMouseOver='mouseOver(".$registro["id_cliente"].")'
                        onMouseOut='mouseOut(".$registro["id_cliente"].")' style='display:inline'>".$registro["nome"]."</span></td>
                            <td style= 'text-align: center; 
                                border: 1px solid black;'>".$registro["email"]."</td>
                            <td style= 'text-align: center; 
                                border: 1px solid black;'>".$registro["idade"]."</td>
                            <td style= 'text-align: center; 
                                border: 1px solid black;'>".$registro["telefone"]."</td>
                            <td style= 'text-align: center; 
                                border: 1px solid black;'>".$registro["laser"]."</td>
                            <td style= 'text-align: center; 
                                            border: 1px solid black;'>".$registro["cadastro"]."</td>
                            <td style= 'text-align: center; 
                                border: 1px solid black;'></td>
                            <td style= 'text-align: center; 
                                border: 1px solid black;'></td>
                            <td style= 'text-align: center; 
                                border: 1px solid black;'></td> 
                            <td style= 'text-align: center; 
                                border: 1px solid black;'></td>          
                        </tr>";
                }
            } 
        };
    
?> 