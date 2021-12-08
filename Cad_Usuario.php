<?php
date_default_timezone_set('America/Belem');
$date = date('Y-m-d H:i');
include 'conectar.php';

	if (isset($_POST['cadastra'])){
                
                $nome      =mb_strtoupper($_POST['nome']);
                $sobrenome      =mb_strtoupper($_POST['sobrenome']);
		$usuario   =mb_strtoupper($_POST['usuario']);
		$email     =$_POST['email'];
		$tipo      =$_POST['tipo'];
                $senha1    =$_POST['senha'];
                $senha     = md5($senha1);
                $ativo     =$_POST['ativo'];
                
                    $rsCadastro = 'INSERT INTO usuario (usuario, nome, sobrenome, senha, email, tipo, ativo) 
                        VALUES (:usuario, :nome, :sobrenome, :senha, :email, :tipo, :ativo)';
            
                try{
                $qrCadastro = $conecta->prepare($rsCadastro);
                $qrCadastro->bindValue(':usuario',$usuario,PDO::PARAM_STR);
                $qrCadastro->bindValue(':nome',$nome,PDO::PARAM_STR);
                $qrCadastro->bindValue(':sobrenome',$sobrenome,PDO::PARAM_STR);
		$qrCadastro->bindValue(':senha',$senha,PDO::PARAM_STR);
                $qrCadastro->bindValue(':email',$email,PDO::PARAM_STR);
		$qrCadastro->bindValue(':tipo',$tipo,PDO::PARAM_STR);
                $qrCadastro->bindValue(':ativo',$ativo,PDO::PARAM_STR);
		$qrCadastro->execute();
		
		echo "<script type='text/javascript'>
				alert('Cadastro realizado com sucesso!');location.href='home_painel.php?pagina=Usuarios';
				</script>";
  
                
		}catch(PDOException $erro){
			echo 'Erro '. $erro->getMessage();
		}
        }	

