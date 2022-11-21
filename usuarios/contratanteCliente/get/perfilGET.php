  
  <?php
    include('../../login/conexao.php');



    if ($vagaGET = mysqli_query(
        $conexao,
        "SELECT * FROM  cliente"
    )) {
        while ($linha = mysqli_fetch_assoc($vagaGET)) {

            echo '
        <div class="useForm">
        <!-- Form Criar Vaga-->
        <form action="../update/updatePerfil.php" method="POST" class="form singup signupForm">

                <div class="inputGroup">
                    <input type="text" name="nomeP" id="nomeP" placeholder="' . $linha['NOME_CLIENTE'] . '" autocomplete="offf" disabled>                    
                </div>

                <div class="inputGroup">
                    <input type="text" name="emailP" id="emailP" placeholder="' . $linha['EMAIL_CLIENTE'] . '" autocomplete="offf" disabled>
                </div>
            
            <div class="inputGroup">
                <input type="password" name="senhaP" id="descricao" placeholder="*****" autocomplete="offf" disabled>
               
            </div>                                               

        </form>
        


    </div>';
        }
    }
    mysqli_close($conexao);


    ?>