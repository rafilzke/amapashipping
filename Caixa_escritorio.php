<style>
    td {
        font-size: 15px;
    }
</style>

<div class="container" style="width: 100%;">
    <br>
    <h3>Caixa Escritório - Últimos Lançamentos</h3>
    <hr />
    <header>
        <div class="row">
            
            <div class="form-group col-md-3">
                <a class="btn btn-primary" href="?pagina=Lancamento_escritorio">Inclui Lançamento</a>

            </div>
            <div class="form-group col-md-3">
                    
                    <?php
                    $soma = $conecta->query("SELECT SUM(valor) AS total FROM financeiro_navio WHERE tipo = '+' ")->fetchColumn();
                    
                    $valor = number_format($soma, 2, ',', '.');
                    print "<font color='green'><b>Entradas: R$"."$valor"."</b></font>";
                    
                ?>    
            </div>
            <div class="form-group col-md-3">
                       <?php
                    $soma1 = $conecta->query("SELECT SUM(valor) AS total FROM financeiro_navio WHERE tipo = '-' ")->fetchColumn();
                    
                    $valor1 = number_format($soma1, 2, ',', '.');
                    print "<font color='red'><b>Saídas: R$"."$valor1"."</b></font>";
                    
                    $total = $soma-$soma1;
                    $valor3 = number_format($total, 2, ',', '.');
                
                ?>    
            </div>
            <div class="form-group col-md-3">
                    <?php print "<font color='blue'><b>Saldo: R$"."$valor3"."</b></font>";?>
            </div>

            <br>
        </div>
        <br>
    </header>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Operação</th>
                <th>Navio </th>
                <th>Cent. Custo </th>
                <th>Data Lanc.</th>
                <th>Valor</th>
                <th width="20%">Ações</th>


            </tr>
        </thead>
        <tbody>

            <?php
            $consulta = $conecta->query("SELECT * FROM financeiro_navio ORDER BY idfinanceiro_navio ASC;");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                // aqui eu mostro os valores de minha consulta

                $idfinanceiro_navio = $linha['idfinanceiro_navio'];
                $identificador = $linha['identificador'];
                $idnavio = $linha['idnavio'];
                $tipo = $linha['tipo'];
                $descricao = $linha['descricao'];
                $datalancamento = $linha['datalancamento'];
                $valor1 = $linha['valor'];
                $valor = number_format($valor1, 2, ',', '.');
                $obs = $linha['obs'];
                $dataatual = $linha['dataatual'];
                if ($tipo == '-')
                    $cor = "red";
                if ($tipo == '+')
                    $cor = "green";

                $consulta1 = $conecta->query("SELECT * FROM navio WHERE $idnavio = idnavio ");
                while ($linha1 = $consulta1->fetch(PDO::FETCH_ASSOC)) {
                    $idnavio1 = $linha1['idnavio'];
                    $vesselname1 = $linha1['vesselname'];
                    $imo1 = $linha1['imo'];
                    ?>   

                <tr style="color:<?php echo $cor;?>">
                        <td><?php echo "$identificador" ?></td>
                        <td>

                            <?php echo "$imo1 $vesselname1";
                        } ?></td>

                    <td><?php echo"$descricao"; ?> </td>
                    <td><?php echo"$datalancamento"; ?> </td>
                    <td><?php echo"$valor"; ?></td>

                    <td width="15%" >
                        <div class="dropdown">
                            <span class=" dropdown-toggle text-gray-dark" data-toggle="dropdown" >OPÇÕES</span>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="?pagina=Ver_financeiro_navio&id=<?php echo "$idfinanceiro_navio"; ?>"> Ver </a>
                                <a class="dropdown-item" href="?pagina=Alterar_financeiro_navio&id=<?php echo "$idfinanceiro_navio"; ?>"> Alterar </a>
                                <a class="dropdown-item" href="?pagina=Excluir_financeiro_navio&id=<?php echo "$idfinanceiro_navio"; ?>" onclick="return confirm('Tem certeza que deseja EXCLUIR esse registro?')"> Excluir </a>
                            </div>
                        </div>

    <!--                        <a href="?pagina=Ver_Usuario&id=<?php echo "$codigo"; ?>" class="btn btn-sm btn-success"> Ver</a>
        <a href="?pagina=Alterar_Usuario&id=<?php echo "$codigo"; ?>" class="btn btn-sm btn-warning"> Editar</a>
        <a href="?pagina=Excluir_Servico&id=<?php echo "$codigo"; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja EXCLUIR esse registro?')" > Estornar</a>
                        -->
                    </td>
                </tr><?php }; ?>
            <tr>

            </tr>

        </tbody>
    </table>
</div>

</body>
</html>