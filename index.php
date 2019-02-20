<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Biblioteca Uirapuru - SCEL</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/bulma.min.css" />

    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>

<body style="background-image:url(../images/bgi.jpg)">
    <!-- Cleiton Dsd - www.github.com/CleitonDsd - dev.cleitondsd@gmail.com - @cleiton_Dsd (twitter) -->   
    <section class="hero is-success is-fullheight">
       <div class = "data " > <!-- Script em JS para pegar dd/mm/yyyy - hh:mm:ss -->
        <script> 
            var data  = new Date()
            var dias  = data.getDay()
            var mes  = data.getMonth()
            var ano   = data.getFullYear()
            var meses = new Array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho',
                'Agosto','Setembro','Outubro','Novembro','Dezembro');
            var diaSemana = new Array(
                'Domingo','Segunda Feira','Terça Feira','Quarta Feira','Quinta Feira','Sexta Feira','Sábado');
            var hoje = data.getDate();
            var hora = data.getHours();
            var min  = data.getMinutes();
            var sec  = data.getSeconds(); 
            var strHora = hora + ':' + min + ':' + sec;
            var strData  = diaSemana[dias] + ", " + hoje + " de " + meses[mes] + " de " + ano + ", " + strHora
            document.write(strData)
        </script>   
    </div>      
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Login</h3>
                <h3 class="title has-text-grey">Biblioteca Uirapuru</h3>
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                  </div>
                  <?php
              endif;
              unset($_SESSION['nao_autenticado']);
              ?>
              <div class="box">
                <form action="login.php" method="POST">
                    <div class="field">
                        <div class="control">
                           <center><a href="https://etecuirapuru.com.br" target="_blank"><img src="./images/logoEtecForm.png"></a></center>
                       </div>
                   </div>

                   <div class="field">
                    <div class="control">
                        <input name="emailUsuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input name="senhaUsuario" class="input is-large" type="password" placeholder="Sua senha">
                    </div>
                </div>
                <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
            </form>
        </div>
    </div>
</div>
</div>
</section>
</body>

</html>