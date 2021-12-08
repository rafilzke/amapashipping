<style>
    td {
        font-size: 15px;
    }
</style>

<div class="container" style="width: 100%;">
    <br>
    <h3>Clientes</h3>
<hr />
<header>
	<div class="row">
		
            <div class="col-sm-6 text-left h2">
	    	<a class="btn btn-primary" href="?pagina=Inclui_Cliente">Inclui novo</a>
	    	
	    </div>
            <br>
	</div>
    <br>
</header>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Razão Social</th>
                <th>Cidade </th>
                <th>País</th>
                <th>Email</th>
                <th width="20%">Ações</th>


            </tr>
        </thead>
        <tbody>

            <?php
            $consulta = $conecta->query("SELECT * FROM cliente ORDER BY idcliente ASC;");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                // aqui eu mostro os valores de minha consulta

                $idcliente   = $linha['idcliente'];
                $razaosocial = $linha['razaosocial'];
                $cidade      = $linha['cidade'];
                $pais        = $linha['pais'];
                $email       = $linha['email'];
                
                ?>   

                <tr>
                    <td><?php echo "$idcliente" ?></td>
                    <td><?php echo "$razaosocial" ?></td>
                    <td><?php echo "$cidade" ?></td>
                    <td><?php echo "$pais" ?></td>
                    <td><?php echo "$email" ?></td>
                    
                    <td width="15%" >
                        
                            <a href="?pagina=Ver_Usuario&id=<?php echo "$codigo"; ?>" class="btn btn-sm btn-success"> Ver</a>
                            <a href="?pagina=Alterar_Usuario&id=<?php echo "$codigo"; ?>" class="btn btn-sm btn-warning"> Editar</a>
                            <a href="?pagina=Excluir_Usuario&id=<?php echo "$codigo"; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja EXCLUIR esse registro?')" > Excluir</a>
                        
                    </td>
                </tr><?php }; ?>
            <tr>

            </tr>

        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>