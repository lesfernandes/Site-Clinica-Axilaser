<?php 
    require "conexao.php";
    $query = "select login from admin";
            
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){ 
        while($registro = $resultado->fetch_assoc()){
            echo 
            "<tr>
                <td style= 'text-align: center; 
                        border: 1px solid black; padding: 5px'>".$registro["login"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black; padding: 5px'><a href='controle.php?login=".$registro["login"]."'>Apagar conta </a></td>
            </tr>";
        };
    }
?>