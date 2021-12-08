<style>
    td {
        font-size: 15px;
    }
</style>

<div class="container" style="width: 100%;">
    <br>
    <h3>Alterar Usuarios</h3>
<hr />


<form action="Update_Usuario.php" method="post">
  <!-- area de campos do form -->
  
  <?php     
            
             $consulta = $conecta->query("SELECT * FROM usuario ORDER BY idusuario ASC;");
             while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                // aqui eu mostro os valores de minha consulta
                 
                                 
                $idusuario= $linha['idusuario'];
                $usuario = $linha['usuario'];
                $nome     =$linha['nome'];
                $sobrenome=$linha['sobrenome'];
                $email    =$linha['email'];
                
             };                   
            ?>
  <div class="row" style="width: 80%; margin: auto;">
      <input type="hidden" name="idusuario" value="<?php echo $idusuario ?>">
      <div class="form-group col-md-5">
      <label for="campo1">Login</label>
      <input type="text" class="form-control" name="usuario" value="<?php echo $usuario ?>"  style="text-transform:uppercase" required>
    </div>
    <div class="form-group col-md-5">
      <label for="campo1">Nome</label>
      <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>"  style="text-transform:uppercase" required>
    </div>
      
    <div class="form-group col-md-5">
      <label for="campo2">Sobrenome</label>
      <input type="text" class="form-control" name="sobrenome" value="<?php echo $sobrenome ?>" style="text-transform:uppercase" required>
    </div>
      
    <div class="form-group col-md-5">
      <label for="campo3">Email</label>
      <input type="text" name="email" value="<?php echo $email ?>" class="form-control" >
    </div>

    <div class="form-group col-md-5">
      <label for="campo4">Senha</label>
      <input type="password" class="form-control" name="senha" required="required">
    </div>

    <div class="form-group col-md-5">
      <label for="campo5">Tipo de usuário</label>
      <select name="tipo" class="form-control" required="required">
                            <option value=""> </option>
                            <option value="1">ADMINISTRADOR</option>
                            <option value="2">USUARIO</option>
                            <option value="3">OPERACIONAL</option>
                                    
      </select>
    </div>
      <div class="form-group col-md-5">
      <label for="campo5">Usuário ativo</label>
      <select name="ativo" class="form-control" required="required">
                            <option value=""> </option>
                            <option value="s">Sim</option>
                            <option value="n">Não</option>
                            
                                    
      </select>
    </div>
    
    
  <br>  
  <div id="actions" class="col-md-12">
    
        <button type="submit" name="alterar" class="btn btn-primary" style="width: 150px;">Salvar</button>
        <button type="reset" class="btn btn-default" style="width: 150px;">Cancelar</a>
    </div>
  </div>
</form>
</div>

</div>

</body>
</html>