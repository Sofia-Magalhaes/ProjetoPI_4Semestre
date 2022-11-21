<?php
  include('../../login/conexao.php');
  


  if ($vagaGET = mysqli_query(
    $conexao,
    "SELECT * FROM contratos, cliente"
  )) {
    while ($linha = mysqli_fetch_assoc($vagaGET)) {
      if ($linha['STATUS_CONTRATO']  == 5 OR $linha['STATUS_CONTRATO']  == 1) {
        echo '
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">                                    
              <h5 class="card-title">Solicitado por ' . $linha['NOME_CLIENTE'] . '</h5>
              <p class="card-text">Pagamento alterado será de R$ ' . $linha['PAGAMENTO_CONTRATO'] . '</p>
              <p class="card-text">Data alterada para o dia: </p>' . $linha['DATA_CONTRATO'] . '</p>                                                          
            </div>
          </div> ';
      }
    }
  }
  mysqli_close($conexao);