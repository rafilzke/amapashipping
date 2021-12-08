<?php
date_default_timezone_set('America/Belem');
$date = date('Y-m-d H:i');
include 'conectar.php';

	if (isset($_POST['cadastra'])){
                
                $razaosocial= mb_strtoupper($_POST['razaosocial']);
                $endereco   = mb_strtoupper($_POST['endereco']);
		$cidade     = mb_strtoupper($_POST['cidade']);
		$pais       = mb_strtoupper($_POST['pais']);
		$email      = $_POST['email'];
                
                    $rsCadastro = 'INSERT INTO cliente 
                        (razaosocial, endereco, cidade, pais, email) 
                        VALUES (:razaosocial, :endereco, :cidade, :pais, :email)';
            
                try{
                $qrCadastro = $conecta->prepare($rsCadastro);
                $qrCadastro->bindValue(':razaosocial',$razaosocial,PDO::PARAM_STR);
                $qrCadastro->bindValue(':endereco',$endereco,PDO::PARAM_STR);
                $qrCadastro->bindValue(':cidade',$cidade,PDO::PARAM_STR);
		$qrCadastro->bindValue(':pais',$pais,PDO::PARAM_STR);
                $qrCadastro->bindValue(':email',$email,PDO::PARAM_STR);
		$qrCadastro->execute();
		
		echo "<script type='text/javascript'>
				alert('Cadastro realizado com sucesso!');location.href='home_painel.php?pagina=Clientes';
				</script>";
  
                
		}catch(PDOException $erro){
			echo 'Erro '. $erro->getMessage();
		}
        }	

