


    <style>
        td {
            font-size: 15px;
        }
    </style>

    <div class="container" style="width: 100%;">
        <br>
        <h3>Inclui Proforma</h3>



        <form action="Cad_Proforma.php" method="post">
            <!-- area de campos do form -->
            <hr />
            <div class="row" style="width: 100%; margin: auto;">
                <div class="form-group col-md-2">
                    <b>Identificador</b>
                    <input type="text" name="identificador" class="form-control" >
                </div>

                <div class="form-group col-md-3">
                    <b>Cliente</b>
                    <select name="cliente" class="form-control" required="required">
                        <option value=""> </option>
                        
        <?php
            $consulta = $conecta->query("SELECT * FROM cliente ORDER BY idcliente ASC;;");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                   $idcliente = $linha['idcliente'];
                   $razaosocial = $linha['razaosocial'];
     
            echo"<option value='$idcliente'>$razaosocial</option>"; }?>

                    </select>
                    
          
                    
           

                </div>
                <div class="form-group col-md-3">
                    <b>Navio</b>
                    <select name="navio" class="form-control" required="required">
                        <option value=""> </option>
                        <?php
            $consulta = $conecta->query("SELECT * FROM navio;");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    $idnavio = $linha['idnavio'];
                    $vesselname = $linha['vesselname'];
                    $imo = $linha['imo'];
            echo"<option value='$idnavio'>IMO $imo $vesselname</option>"; };?>

                    </select>

            </div>

            <div class="form-group col-md-3">
                <b>Data saída</b>
                <input type="date" id="meeting-time"
                       name="datasaida"  class="form-control">
            </div>
            <div class="form-group col-md-3">
                <b>Previsão chegada</b>
                <input type="date" id="meeting-time"
                       name="previsaochegada"  class="form-control">
            </div>

            <div class="form-group col-md-2">
                <b>Valor da operação</b>
                <input type="text" name="valor" id="valor" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <b>Arquivo Proforma</b>
                <input type="file" name="documento" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <b>Observações</b>
                <input type="text" name="obs" id="valor" class="form-control">
                <input type="hidden" name="status" value="1">
            </div>



            <div class="col-md-12">
                <button type="submit" name="cadastra" class="btn btn-primary" style="width: 150px;">Salvar</button>
                <button type="reset" class="btn btn-default" style="width: 150px;">Cancelar</a>
            </div>

    </form>
</div>

</div>

</body>
</html>