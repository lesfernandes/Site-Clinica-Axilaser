<?php
	session_start();

	date_default_timezone_set('America/Sao_Paulo');

	$today = date("d-m-Y H:i");
	$nomeUsuario=$_POST["nomeUsuario"];
	$idadeUsuario=$_POST["idadeUsuario"];
    $cpfUsuario = $_POST["cpfUsuario"];
	$emailUsuario=$_POST["emailUsuario"];
	$telefoneUsuario=$_POST["telefoneUsuario"];
	$laser = $_POST["laser"];
	$id_horario = $_POST["horario"];
	$regiao = $_POST["regiao"];

	include_once "conexao.php";

	$queryVerificaCPF = "SELECT cpf FROM cliente WHERE cpf = '$cpfUsuario'";  

	$resultado8 = $conexao->query($queryVerificaCPF);

	if($resultado8->num_rows>0){

		echo "<script language='javascript' type='text/javascript'> alert('Esse CPF já está cadastrado'); window.location.href='../laserGratis';</script>";

	}else{	
	    if($laser=="Sim"){
    			$queryInserirUsuario ="INSERT INTO cliente VALUES (NULL, '$nomeUsuario', $idadeUsuario, '$cpfUsuario', '$emailUsuario', '$telefoneUsuario', '$laser', '$today');";
    			$resultado9=$conexao->query($queryInserirUsuario);
    			echo "<script language='javascript' type='text/javascript'> window.location.href='../jaFezLaser.php'; </script>";
    
    		}else{
    		    if($id_horario=="invalido"){
			       echo "<script language='javascript' type='text/javascript'> alert('Insira um horário válido'); window.location.href='../laserGratis';</script>";
    		
    		    }else{
    		    
        			$queryInserirUsuario ="INSERT INTO cliente VALUES (NULL, '$nomeUsuario', $idadeUsuario, '$cpfUsuario', '$emailUsuario', '$telefoneUsuario', '$laser', '$today');";
        
        			$resultado9=$conexao->query($queryInserirUsuario);	
        
        			$querySelectID="select id_cliente from cliente where cpf='".$cpfUsuario."'";
        			$resultadoSelectID=$conexao->query($querySelectID);
        			
        			while($rowId=$resultadoSelectID->fetch_assoc()){	 
        				$idUsuario=$rowId["id_cliente"];
        			}
        			
        			$queryAgenda = "INSERT INTO agenda VALUES (NULL,'".$idUsuario."', NULL,'".$id_horario."', '".$regiao."', NULL, 0)";
        
        			$queryDataHora="UPDATE datahora SET agendada=1 WHERE id_horario_data=$id_horario;";
        
        		    $resultado = $conexao->query($queryAgenda);
        
        		    $resultado3 = $conexao->query($queryDataHora);
        		    
        		    if(!(($resultado)&($resultado9)&($resultado3))){
        		    	echo "<script language='javascript' type='text/javascript'>alert('Ocorreu um erro durante seu agendamento'); window.location.href='../laserGratis';</script>";
        
        	   		}else{
        	            echo "<!DOCTYPE html>
                                <html>
                                <head>
                                	<style>
                                	    html{
                                	        height: 100%;
                                	        
                                	    }
                                	    body{
                                	       background-image: linear-gradient(-45deg, rgb(21, 241, 203), rgb(121, 250, 255));
                                	       background-size:cover;
                                	       background-repeat: no-repeat;
                                	       display: flex;
                                                align-items: center;
                                                justify-content: center;
                                	       
                                	    }
                                	    
                                	    @media screen and (min-width: 1000px){
                                	        #imagemvoucher{
                                	            width: 50%;
                                	            
                                	        }
                                	    }
                                	</style>
                                </head>
                                <body>
                                    <img src='../images/voucher.jpeg' width=100% id='imagemvoucher'>
                                </body>
                                </html>";
        	   		    header("Refresh: 5; url=../nossosProgramas");
        	   		}
    	   		}
    		}
	   	}
	
?>