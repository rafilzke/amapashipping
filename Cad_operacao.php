<?php

include 'conectar.php';

if (isset($_POST['alterar'])) {

    $idproposta = $_POST['idproposta'];
    $identificador = $_POST['identificador'];
    $idcliente = $_POST['cliente'];
    $idnavio = $_POST['navio'];
    $datasaida = $_POST['datasaida'];
    $previsaochegada = $_POST['previsaochegada'];
    $valor1 = $_POST['valor'];
    $valor           = str_replace(',', '.', str_replace('.', '', $valor1));
    $valorentrada1= $_POST['valorentrada'];
    $valorentrada = str_replace(',', '.', str_replace('.', '', $valorentrada1));
    $status = $_POST['status'];
    $obs = $_POST['obs'];

    $rsCadastro = 'UPDATE proposta SET identificador = :identificador,
                                                       status = :status,
                                                       datasaida = :datasaida, 
                                                       previsaochegada = :previsaochegada,
                                                       valor = :valor,
                                                       valorentrada = :valorentrada,
                                                       idnavio = :idnavio,
                                                       idcliente = :idcliente,
                                                       obs = :obs                                                       
                                                       WHERE idproposta = :idproposta';
    try {
        $qrCadastro = $conecta->prepare($rsCadastro);
        $qrCadastro->bindValue(':idproposta', $idproposta, PDO::PARAM_STR);
        $qrCadastro->bindValue(':identificador', $identificador, PDO::PARAM_STR);
        $qrCadastro->bindValue(':status', $status, PDO::PARAM_STR);
        $qrCadastro->bindValue(':datasaida', $datasaida, PDO::PARAM_STR);
        $qrCadastro->bindValue(':previsaochegada', $previsaochegada, PDO::PARAM_STR);
        $qrCadastro->bindValue(':valor', $valor, PDO::PARAM_STR);
        $qrCadastro->bindValue(':valorentrada', $valorentrada, PDO::PARAM_STR);
        $qrCadastro->bindValue(':idnavio', $idnavio, PDO::PARAM_STR);
        $qrCadastro->bindValue(':idcliente', $idcliente, PDO::PARAM_STR);
        $qrCadastro->bindValue(':obs', $obs, PDO::PARAM_STR);

        $qrCadastro->execute();

        echo "<script type='text/javascript'>
				alert('Cadastro realizado com sucesso!');location.href='home_painel.php?pagina=Operacoes';
				</script>";
    } catch (PDOException $erro) {
        echo 'Erro ' . $erro->getMessage();
    }
}