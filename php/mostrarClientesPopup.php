<?php 
    require "conexao.php";
    $query = "select * from popup";
            
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){ 

        while($registro = $resultado->fetch_assoc()){

            echo 
                "<tr>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro["nome"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro["tel"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro["cpf"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro["email"]."</td>         
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro["cadastro"]."</td>
                </tr>";
                        
        }
    }
?>