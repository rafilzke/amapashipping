<?php
date_default_timezone_set('America/Belem');
$date = date('Y-m-d H:i');
include 'conectar.php';

	if (isset($_POST['cadastra'])){
                
            $identificador  = $_POST['identificador'];
            $idcliente      = $_POST['cliente'];
            $idnavio        = $_POST['navio'];
            $datasaida      = $_POST['datasaida'];
            $previsaochegada= $_POST['previsaochegada'];
            $valor1          = $_POST['valor'];
            $valor           = str_replace(',', '.', str_replace('.', '', $valor1));
            $status         = $_POST['status'];
            $obs            = $_POST['obs'];
            $dataproposta   = date('Y-m-d H:i');
            
        
            
            $rsCadastro = 'INSERT INTO proposta 
                        (identificador, status, dataproposta, datasaida, previsaochegada, valor, idnavio, idcliente, obs ) 
                        VALUES (:identificador,  :status, :dataproposta, :datasaida, :previsaochegada, :valor, :idnavio, :idcliente, :obs)';
            
                try{
                $qrCadastro = $conecta->prepare($rsCadastro);
                $qrCadastro->bindValue(':identificador',$identificador,PDO::PARAM_STR);
                $qrCadastro->bindValue(':datasaida',$datasaida,PDO::PARAM_STR);
                $qrCadastro->bindValue(':previsaochegada',$previsaochegada,PDO::PARAM_STR);
		$qrCadastro->bindValue(':valor',$valor,PDO::PARAM_STR);
                $qrCadastro->bindValue(':idnavio',$idnavio,PDO::PARAM_STR);
                $qrCadastro->bindValue(':idcliente',$idcliente,PDO::PARAM_STR);
                $qrCadastro->bindValue(':status',$status,PDO::PARAM_STR);
                $qrCadastro->bindValue(':dataproposta',$dataproposta,PDO::PARAM_STR);
                $qrCadastro->bindValue(':obs',$obs,PDO::PARAM_STR);
		$qrCadastro->execute();
		
		echo "<script type='text/javascript'>
				alert('Cadastro realizado com sucesso!');location.href='home_painel.php?pagina=Proforma';
				</script>";
  
                
		}catch(PDOException $erro){
			echo 'Erro '. $erro->getMessage();
		}
        }	

