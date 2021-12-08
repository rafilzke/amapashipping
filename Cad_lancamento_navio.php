<?php
date_default_timezone_set('America/Belem');
$date = date('Y-m-d H:i');
include 'conectar.php';

	if (isset($_POST['cadastra'])){
                
            $identificador  = $_POST['identificador'];
            $idnavio        = $_POST['navio'];
            $tipo           = $_POST['tipo'];
            $descricao      = $_POST['centrodecusto'];
            $datalancamento = $_POST['datalancamento'];
            $valor1         = $_POST['valor'];
            $valor          = str_replace(',', '.', str_replace('.', '', $valor1));
            $status         = $_POST['status'];
            $obs            = $_POST['obs'];
            $dataatual      = date('Y-m-d');
            
        
            
            $rsCadastro = 'INSERT INTO financeiro_navio 
                        (identificador, idnavio, tipo, descricao, datalancamento, valor, usuario, obs, dataatual, status) 
                        VALUES (:identificador, :idnavio, :tipo, :descricao, :datalancamento, :valor, :usuario, :obs, :dataatual, :status)';
            
                try{
                $qrCadastro = $conecta->prepare($rsCadastro);
                $qrCadastro->bindValue(':identificador',$identificador,PDO::PARAM_STR);
                $qrCadastro->bindValue(':idnavio',$idnavio,PDO::PARAM_STR);
                $qrCadastro->bindValue(':tipo',$tipo,PDO::PARAM_STR);
		$qrCadastro->bindValue(':descricao',$descricao,PDO::PARAM_STR);
                $qrCadastro->bindValue(':datalancamento',$datalancamento,PDO::PARAM_STR);
                $qrCadastro->bindValue(':valor',$valor,PDO::PARAM_STR);
                $qrCadastro->bindValue(':usuario',$status,PDO::PARAM_STR);
                $qrCadastro->bindValue(':obs',$obs,PDO::PARAM_STR);
                $qrCadastro->bindValue(':dataatual',$dataatual,PDO::PARAM_STR);
                $qrCadastro->bindValue(':status',$status,PDO::PARAM_STR);
                
		$qrCadastro->execute();
		
		echo "<script type='text/javascript'>
				alert('Cadastro realizado com sucesso!');location.href='home_painel.php?pagina=Caixa_navio';
				</script>";
  
                
		}catch(PDOException $erro){
			echo 'Erro '. $erro->getMessage();
		}
        }	

