<?php
    require 'php/validarLoginAdmin.php';
?>
<?php
    include 'php/headerAdmin.php';
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
                <div class="agileits_mail_grid_right1 agile_mail_grid_right1" id="formCadastroSessao">
                    <form action="php/inserirHorariosDisponiveis.php" method="post">
                        <h2 style="color: #666666" class="agileits-title">Cadastro de Horários</strong></h2>
                        <input type="hidden" name="id_data" value="<?php echo $_GET['id_data']?>">
                        <span>
                            <i>Horários Disponíveis:</i>
                            <input type="text" name="horario" placeholder="" required="">
                        </span>
                        <div class="w3_submit">
                            <input type="submit" value="Adicionar Horários">
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <?php
        require 'footer.php';
    ?>