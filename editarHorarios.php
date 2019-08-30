<?php
    require 'php/validarLoginAdmin.php';
?>
<?php
    require 'php/headerAdmin.php';
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
    <div class="cadastroSessao">
        <div class="container">
            <br>
            
            <br>
                <div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formCadastroSessao">
                    <form action="php/alterarHorariosDisponiveis.php" method="post">
                        <h2 style="color: #666666" class="agileits-title">Editar Horário do dia <?php 
                require "php/conexao.php";
                //Horario é recebido via get 
                $id_Horario=$_GET['id_horario'];
                $query = "select id_data from datahora where id_horario_data=".$id_Horario;
                $resultado = $conexao->query($query);
                while($registro= $resultado->fetch_assoc()){
                    $dia = $registro["id_data"];
                }
                $query = "select DATE_FORMAT(data, '%d/%m/%Y') as data from datas where id_data=".$dia;
                $resultado = $conexao->query($query);
                while($registro= $resultado->fetch_assoc()){
                    echo $registro["data"];
                }
            ?></strong></h2>
                        <span>
                            <input type="hidden" name="id_horario" value="<?php echo $_GET["id_horario"]; ?>"/>
                            <i>Digite o novo horário:</i>
                            <input type="text" name="horario" placeholder="<?php
                                require "php/conexao.php";
                                //Horario é recebido via get 
                                $id_Horario=$_GET['id_horario'];
                                $query = "select TIME_FORMAT(horario, '%H:%i') as horario from datahora where id_horario_data=".$id_Horario;
                                $resultado = $conexao->query($query);
                                while($registro= $resultado->fetch_assoc()){
                                    echo $registro["horario"];
                                }
                             ?>" required="">
                        </span>
                        <div class="w3_submit">
                            <input type="submit" value="Editar Horário">
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <?php
        require 'footer.php';
    ?>