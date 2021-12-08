<?php
date_default_timezone_set('America/Belem');
$date = date('Y-m-d H:i');
include 'conectar.php';

	if (isset($_POST['cadastra'])){
                
                $descricao =mb_strtoupper($_POST['descricao']);
                $tipo      =mb_strtoupper($_POST['tipo']);
		$ativo     =$_POST['ativo'];
                
                    $rsCadastro = 'INSERT INTO centrodecusto (descricao, tipo, ativo) 
                        VALUES (:descricao, :tipo, :ativo)';
            
                try{
                $qrCadastro = $conecta->prepare($rsCadastro);
                $qrCadastro->bindValue(':descricao',$descricao,PDO::PARAM_STR);
                $qrCadastro->bindValue(':tipo',$tipo,PDO::PARAM_STR);
                $qrCadastro->bindValue(':ativo',$ativo,PDO::PARAM_STR);
		$qrCadastro->execute();
		
		echo "<script type='text/javascript'>
				alert('Cadastro realizado com sucesso!');location.href='home_painel.php?pagina=Centro_custos';
				</script>";
  
                
		}catch(PDOException $erro){
			echo 'Erro '. $erro->getMessage();
		}
        }	

