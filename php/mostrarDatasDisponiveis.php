<?php
    include "conexao.php";

    $query = "select *,DATE_FORMAT(data, '%d/%m/%Y') as data from datas WHERE apagado = 0 ORDER BY  SUBSTR(data, 7, 4), 
      SUBSTR(data, 4, 2), SUBSTR(data, 1, 2)";

    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){
        while($registro = $resultado->fetch_assoc()){
            $query2 = "select id_horario_data,agendada,TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_data = ".$registro["id_data"]." AND apagado = 0 ORDER BY horario ASC";
            $resultado2 = $conexao->query($query2);
            $resultado3 = $conexao->query($query2);
            echo "
                <tr>
                <td style= 'text-align: center; 
                            color: black; 
                            border: 1px solid black; padding: 5px;'>".$registro["data"]."</td>
                
                <td style= 'text-align: center; 
                            color: black; 
                            border: 1px solid black; padding: 5px;' >
                  ";
            while($registroHoras = $resultado2->fetch_assoc()){
                echo "<div class='opcoesDiv opcoesHorario' id='opcoes".$registroHoras["id_horario_data"]."' onMouseOver='mouseOver(".$registroHoras["id_horario_data"].")'
                    onMouseOut='mouseOut(".$registroHoras["id_horario_data"].")'>
                    <a href='editarHorarios.php?id_horario=".$registroHoras["id_horario_data"]."'>Editar</a> || <a href='confirma.php?id_horario=".$registroHoras["id_horario_data"]."'>Apagar</a>
                    </div>
                    <span  class='spanHorario' onMouseOver='mouseOver(".$registroHoras["id_horario_data"].")'
                    onMouseOut='mouseOut(".$registroHoras["id_horario_data"].")' style='display:inline'>".$registroHoras["horarioF"]."</span>
                    <br />";
            }
            echo "
                    </td>
                    <td style= 'text-align: center; 
                            color: black; 
                            border: 1px solid black; padding: 5px;'>";
            while($registroHoras2 = $resultado3->fetch_assoc()){
                $agendado=$registroHoras2["agendada"]=="1"?"Reservado":"Disponível";
                echo $agendado."<br />";
            }
            echo "</td>
                    <td style= 'text-align: center; 
                                    color: black; 
                                    border: 1px solid black; padding: 5px;'><a href='cadastroHorarios.php?id_data=".$registro["id_data"]."'>Inserir Horários</a> <br />
                                    <a href='confirma.php?id_data=".$registro["id_data"]."'>Apagar Dia</a><br />   
                                    </td></tr>";
        }
    }

?>