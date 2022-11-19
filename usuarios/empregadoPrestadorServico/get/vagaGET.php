  <?php
    include('../../login/conexao.php');

    if($vagaGET = mysqli_query($conexao,
    "SELECT * FROM vagas, cliente")){
      while($linha = mysqli_fetch_assoc($vagaGET)){
        echo '
        <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Solicitado por '.$linha['NOME_CLIENTE']. '</h5>
              <p class="card-text">'.$linha['DESCRICAO_VAGAS'].'</p>
              <a href="#" class="btn btn-primary">Detalhes</a>
              <a href="#" class="btn btn-danger">Recusar</a>
              <a href="#" class="btn btn-success">Aceitar</a>
            </div>
          </div>
        </div>';
      }
    }
  mysqli_close($conexao);


  ?>

