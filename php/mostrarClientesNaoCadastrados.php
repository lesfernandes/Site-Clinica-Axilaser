<?php 
    require "conexao.php";
    $query2 = "select id_cliente_formulario, nome, email, telefone, situacao, idade from clientesformulario order by `nome` asc";
            
    $resultado2 = $conexao->query($query2);
    $situacao= "";
    $classe= "";
    if($resultado2->num_rows>0){ 
        while($registro2 = $resultado2->fetch_assoc()){
            if($registro2["situacao"]==1){
                $situacao="Apto";
                $classe="apto";
            }
            if($registro2["situacao"]==2){
                $situacao="Avaliação";
                $classe="avaliacao";
            }
            if($registro2["situacao"]==3){
                $situacao="Não-apto";
                $classe="napto";
            }
            echo 
            "<tr class='".$classe."'>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>
                        <div  class='opcoesDiv opcoesCliente' id='opcoesCli".$registro2["id_cliente_formulario"]."' onMouseOver='mouseOver(".$registro2["id_cliente_formulario"].")' onMouseOut='mouseOut(".$registro2["id_cliente_formulario"].")'>
                            <a href='ficha.php?id_usuario=".$registro2["id_cliente_formulario"]."'>Mais Informações</a> || <a href='confirma.php?id_clienteNC=".$registro2["id_cliente_formulario"]."'>Apagar</a>
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
            $classe="";
        };
    }
?>