<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../DecoLivre/lp/favicon_io/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../DecoLivre/lp/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../DecoLivre/lp/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../DecoLivre/lp/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../DecoLivre/lp/site.webmanifest">
    <link rel="stylesheet" href="../../lp/css/styleLogin.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h3>Quer receber ofertas inesperadas?</h3>
            <p>Inscreva-se em nosso site e surpreenda-se!</p>
          <img src="pngwing.com.png" class="left-login-image" alt="Cadastro">
        </div>
        <div class="right-login">
            <form action="../control/login_action.php" method="post" class="card-login">
                <h1>Login</h1>
                <div class="textfield">
                    <label for="email_usu">Email:</label>
                    <input type="email" name="email_usu" placeholder="Email">
                </div>
                <div class="textfield">
                    <label for="senha_usu">Senha:</label>
                    <input type="password" name="senha_usu" placeholder="senha">
                </div>
                <button type="submit" class="btn-login">Confirmar</button>
                <p>Não tem conta?</p>
                <a style="color: red;" href="../login_cadastro/cadastro.php">Cadastrar-se</style></a>
            </form>
        </div>
    </div> 
       
</body>
</html>
