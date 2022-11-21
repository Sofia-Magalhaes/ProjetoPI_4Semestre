<?php
    include('login/conexao.php');


 

    if($vagaGET = mysqli_query($conexao,
    "SELECT * FROM vagas")){
      while($linha = mysqli_fetch_assoc($vagaGET)){        
        echo '
        <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">'.$linha['NOME_VAGAS']. '</h2>
              <h5 class="card-title">'.$linha['TIPOSERVICO_VAGAS']. '</h5>              
              <p class="card-text">'.$linha['DESCRICAO_VAGAS'].'</p>
              <a href="../contratanteCliente/contratarServico.php?id='.$linha['ID_VAGAS'].'" class="btn btn-primary">Ver mais detalhes</a>
            </div>
          </div>
        </div>';
      }
    }
  mysqli_close($conexao);
