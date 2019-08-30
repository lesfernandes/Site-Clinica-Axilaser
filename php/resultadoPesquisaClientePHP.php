<?php 
	require "conexao.php";
	if(isset($_POST["nomePesquisaC"])){
		$query = "select * from cliente where nome like '%".$_POST["nomePesquisaC"]."%' order by `nome` asc";
            
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
                                            border: 1px solid black;'>".$registro["nome"]."</td>
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
                                border: 1px solid black;'>".$registro["nome"]."</td>
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
    	}
    }
	if(isset($_POST["nomePesquisaNC"])){
    $query2 = "select id_cliente_formulario, nome, email, telefone, situacao, idade from clientesformulario where nome like '%".$_POST["nomePesquisaNC"]."%' order by `nome` asc";
            
    $resultado2 = $conexao->query($query2);
    $situacao= "";
    if($resultado2->num_rows>0){ 
        while($registro2 = $resultado2->fetch_assoc()){
            if($registro2["situacao"]==1){
                $situacao="Apto";
            }
            if($registro2["situacao"]==2){
                $situacao="Avaliação";
            }
            if($registro2["situacao"]==3){
                $situacao="Não-apto";
            }
            echo 
            "<tr>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>
                        <div class='opcoesDiv' id='opcoesCli".$registro2["id_cliente_formulario"]."' onMouseOver='mouseOver(".$registro2["id_cliente_formulario"].")' onMouseOut='mouseOut(".$registro2["id_cliente_formulario"].")'>
                            <a href='ficha.php?id_usuario=".$registro2["id_cliente_formulario"]."'>Mais Informações</a>
                        </div>
                        <span  class='spanHorario' onMouseOver='mouseOver(".$registro2["id_cliente_formulario"].")'
                        onMouseOut='mouseOut(".$registro2["id_cliente_formulario"].")' style='display:inline'>".$registro2["nome"]."</span>
                        <br />
                        </td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro2["email"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro2["idade"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro2["telefone"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$situacao."</td>
            </tr>";
            $situacao="";
        };
    }
	}

    if(isset($_POST["nomePesquisaP"])){
        $query3 = "select * from popup where nome like '%".$_POST["nomePesquisaP"]."%' order by `nome` asc";
            
        $resultado3 = $conexao->query($query3);

        if($resultado3->num_rows>0){ 
            while($registro3 = $resultado3->fetch_assoc()){
                echo 
                "<tr>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro3["nome"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro3["tel"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro3["cpf"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro3["email"]."</td>
                </tr>";
        }
    }
}
?>