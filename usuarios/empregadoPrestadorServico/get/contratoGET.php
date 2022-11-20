  
  <?php
  include('../../login/conexao.php');


  if ($vagaGET = mysqli_query(
    $conexao,
    "SELECT * FROM contratos, cliente")){
    while ($linha = mysqli_fetch_assoc($vagaGET)) {
      echo '
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">                                    
              <h5 class="card-title">Solicitado por ' . $linha['NOME_CLIENTE'] . '</h5>
              <p class="card-text">Pagamento será de R$ ' . $linha['PAGAMENTO_CONTRATO'] . '</p>
              <p class="card-text">Data estimada pelo cliente para o termino do serviço: </p>' . $linha['DATA_CONTRATO'] . '</p>
              <a href="../empregadoPrestadorServico/propostaContrato.php?id='.$linha['ID_CONTRATO'].'" class="btn btn-secondary">Contraproposta</a>
              <a href="#" class="btn btn-danger">Recusar</a>
              <a href="#" class="btn btn-success">Aceitar</a>
            </div>
          </div> ';
    }
  }
  mysqli_close($conexao);


  ?>

