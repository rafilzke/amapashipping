

<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="js/mascara.js"></script> 

<script type="text/javascript">
    $('.dinheiro').mask('0.000,00', {reverse: true});
</script>
        
<?php
        $idnoticia = $_GET['id'];
        $consulta = $conecta->query("SELECT * FROM noticias WHERE idnoticia = $idnoticia;");
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            // aqui eu mostro os valores de minha consulta
            $idnoticia     = $linha['idnoticia'];
                $titulo        = $linha['titulo'];
                $resumo        = $linha['resumo'];               
                $img           =$linha['img'];
                $autor         =$linha['autor'];
                $data_post     =$linha['data_post'];
                $img = $linha['img'];

            if ($tipoimovel !== 'Lote')
                $valorx = "R$ " . $valor_imovel;
            if ($tipoimovel == 'Lote')
                $valorx = $valorparcela;

            if ($quartos == '1')
                $quarto = 'Quarto';
            else
                $quarto = 'Quartos';
            if ($banheiros == '1')
                $banheiro = 'Banheiro';
            else
                $banheiro = 'Banheiros';
            ?>    


        <?php }; ?>

<div class="container" style="width: 90%;">
    
<h3>Alterar Informações</h3>



<form action="Update_Imovel.php" method="post" enctype="multipart/form-data">
  <!-- area de campos do form -->
  <hr />
  <div class="row">

    <div class="form-group col-md-6">
      <b>Descrição</b>
      <input style="color: red" type="text" name="descricao" class="form-control" value="<?php echo $descricao; ?>" required>
      <input type="hidden" name="idimoveis" value="<?php echo $idimoveis?>" >
    </div>

    <div class="form-group col-md-3">
        <b> Tipo de imóvel </b>
      <select style="color: red" name="tipoimovel" class="form-control" required>
        <option value="<?php echo $tipoimovel; ?>"><?php echo $tipoimovel; ?></option>
        <option value="Casa">Casa</option>
        <option value="Apartamento">Apartamento</option>
        <option value="Sala">Sala</option>
        <option value="Sala Comercial">Sala Comercial</option>
       
        
      </select>
    </div>
    <div class="form-group col-md-3">
        <b> Tipo de Negócio </b>
      <select style="color: red" name="tiponegocio" class="form-control" required>
        <option value="<?php echo $tiponegocio ?>"><?php echo $tiponegocio?></option>
        <option value="Venda">Venda</option>
        <option value="Aluguel">Aluguel</option>
      </select>
    </div>

    <div class="form-group col-md-4">
        <b> Área total</b>
        <input style="color: red" type="text" class="form-control" name="area" value="<?php echo $area;?>">
    </div>
      
    <div class="form-group col-md-4">
        <b>Quartos</b>
      <select style="color: red" name="quartos" class="form-control">
        <option value="<?php echo $quartos;?>"><?php echo $quartos;?> </option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <div class="form-group col-md-4">
        <b>Banheiros</b>
      <select style="color: red" name="banheiros" class="form-control" >
        <option value="<?php echo $banheiros?>"><?php echo $banheiros?>  </option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <div class="form-group col-md-4">
        <b>Suites</b>
      <select style="color: red" name="suites" class="form-control" >
        <option value="<?php echo $suites?>"><?php echo $suites?> </option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>

    <div class="form-group col-md-8">
        <b>Observação</b>
        <input style="color: red" type="text" class="form-control" name="obs" value="<?php echo $observacoes;?>">
    </div>  
      
    <div class="form-group col-md-6">
        <b>Endereço</b>
        <input style="color: red" type="text" class="form-control" name="endereco" value="<?php echo $endereco ?>">
    </div>  
    <div class="form-group col-md-2">
        <b>Número</b>
        <input style="color: red" type="text" name="numero" class="form-control" value="<?php echo $numero?>" >
    </div>

    <div class="form-group col-md-4">
        <b>Bairro</b>
      <select style="color: red" name="bairro" class="form-control">
                    <option value="<?php echo $bairro?>" > <?php echo $bairro ?> </option>
                    <?php
            
            $consulta = $conecta->query("SELECT idconfig,bairro FROM config WHERE bairro>'' ORDER BY idconfig ASC;");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                // aqui eu mostro os valores de minha consulta
                
                $idbairro = $linha['idconfig'];
                $bairro = $linha['bairro'];

            echo "<option value='$bairro'>$bairro</option>"; } ?>
                
                </select>
    </div>

    <div class="form-group col-md-4">
        <b>Complemento</b>
        <input style="color: red" type="text" class="form-control" name="complemento" value="<?php echo $complemento?>" >
    </div>

    <div class="form-group col-md-4">
        <b>Cidade</b>
     <select style="color: red" name="cidade" class="form-control">
                    <option value="<?php echo $cidade?>" ><?php echo $cidade?></option>
                <?php
            
            $consulta = $conecta->query("SELECT idconfig,cidade FROM config WHERE cidade>'' ORDER BY idconfig ASC;");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                // aqui eu mostro os valores de minha consulta
                
                $idcidade = $linha['idconfig'];
                $cidade = $linha['cidade'];

            echo "<option value='$cidade'>$cidade</option>"; } ?>
                
                    
                    
                </select>
    </div>
      
    
    <div class="form-group col-md-2">
        <b>Estado</b>
        <select style="color: red" name="estado" class="form-control">
                            <option value="<?php echo $estado?>"><?php echo $estado?></option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
    </div>

    <div class="form-group col-md-2">
        <b>Valor do imóvel</b>
        <input style="color: red" type="text" name="valor" class="form-control" onKeyUp="maskIt(this,event,'###.###.###,##',true)" value="<?php echo $valor_imovel?>">
        
    </div>

    <div class="form-group col-md-6">
        <b>Foto principal</b>
        <input style="color: red" type="file" name="img" class="form-control" required="required" >
    </div>

    <div class="form-group col-md-2">
        <b>Destaque?</b>
        <select style="color: red" name="destaque" class="form-control" required>
                            <option value=""></option>
                            <option value="s">Sim</option>
                            <option value="n">Não</option>
                                    
      </select>
    </div>
   <input type="hidden" name="parcela" value="">
<div class="form-group col-md-4"><br>
       <button type="submit" name="alterar" class="btn btn-primary" style="width: 150px;">Alterar</button>
       &nbsp;<button type="reset" class="btn btn-default" style="width: 150px;">Cancelar</a>
    </div>
   
  </div>
  <br>  
  
    <br><br>
  
</form>

</div>

</body>
</html>