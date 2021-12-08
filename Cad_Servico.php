<?php
date_default_timezone_set('America/Belem');
$date = date('Y-m-d H:i');
include 'conectar.php';

	if (isset($_POST['cadastra'])){
                
                $descricao =mb_strtoupper($_POST['descricao']);
                $unidade   =mb_strtoupper($_POST['unidade']);
//		$valor1    =mb_strtoupper($_POST['valor']);
//                $valor     = str_replace(',', '.', str_replace('.', '', $valor1));
		$ativo     =$_POST['ativo'];
                
                    $rsCadastro = 'INSERT INTO servicos (descricao, unidade, ativo) 
                        VALUES (:descricao, :unidade, :ativo)';
            
                try{
                $qrCadastro = $conecta->prepare($rsCadastro);
                $qrCadastro->bindValue(':descricao',$descricao,PDO::PARAM_STR);
                $qrCadastro->bindValue(':unidade',$unidade,PDO::PARAM_STR);
                
		$qrCadastro->bindValue(':ativo',$ativo,PDO::PARAM_STR);
		$qrCadastro->execute();
		
		echo "<script type='text/javascript'>
				alert('Cadastro realizado com sucesso!');location.href='home_painel.php?pagina=Servicos';
				</script>";
  
                
		}catch(PDOException $erro){
			echo 'Erro '. $erro->getMessage();
		}
        }	

