<style>
    td {
        font-size: 15px;
    }
</style>

<div class="container" style="width: 100%;">
    <br>
    <h3>Centro de Custos</h3>
<hr />
<header>
	<div class="row">
		
            <div class="col-sm-6 text-left h2">
	    	<a class="btn btn-primary" href="?pagina=Inclui_custo">Inclui Custo</a>
	    	
	    </div>
            <br>
	</div>
    <br>
</header>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Descrição </th>
                <th>Tipo</th>
                <th>Ativo</th>
                <th width="20%">Ações</th>


            </tr>
        </thead>
        <tbody>

            <?php
            $consulta = $conecta->query("SELECT * FROM centrodecusto ORDER BY descricao ASC;");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                // aqui eu mostro os valores de minha consulta


                $codigo = $linha['idcentrodecusto'];
                $descricao = $linha['descricao'];
                $tipo = $linha['tipo'];
                $ativo = $linha['ativo'];
                
                if ($tipo == '-') $tipo ='Saída';
                if ($tipo == '+') $tipo ='Entrada';

                ?>   

                <tr>
                    <td><?php echo "$codigo" ?></td>
                    <td><?php echo "$descricao" ?></td>
                    <td><?php echo "$tipo" ?></td>
                    <td><?php echo "$ativo" ?></td>

                    <td width="15%" >
                        
                            <a href="?pagina=Ver_Usuario&id=<?php echo "$codigo"; ?>" class="btn btn-sm btn-success"> Ver</a>
                            <a href="?pagina=Alterar_Usuario&id=<?php echo "$codigo"; ?>" class="btn btn-sm btn-warning"> Editar</a>
                            <a href="?pagina=Excluir_Servico&id=<?php echo "$codigo"; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja EXCLUIR esse registro?')" > Excluir</a>
                        
                    </td>
                </tr><?php }; ?>
            <tr>

            </tr>

        </tbody>
    </table>
</div>

</body>
</html>