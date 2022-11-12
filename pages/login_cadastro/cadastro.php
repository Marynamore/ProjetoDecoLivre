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
            <h3>Liberdade para você voar com apenas um click!</h3>
          <img src="pngwing.com.png" class="left-login-image" alt="Cadastro">
        </div>
        <div class="right-login">
            <form action="../../../DecoLivre/pages/control/cadastrar_action.php" method="post" class="card-login">
                <h1>Cadastre-se</h1>
                <div class="textfield">
                    <label for="nome_usu">Nome:</label>
                    <input type="text" name="nome_usu" placeholder="Nome">
                </div>
                <div class="textfield">
                    <label for="email_usu">Email:</label>
                    <input type="email" name="email_usu" placeholder="Email">
                </div>
                <div class="textfield">
                    <label for="senha_usu">Senha:</label>
                    <input type="password" name="senha_usu" placeholder="Crie sua senha">
                    <label for="senha">Confirme sua Senha:</label>
                    <input type="password" name="senha_usu" placeholder="Confirmar senha">
                </div>
                
                <select name="" class="textfield">
                    <option value="--">Selecione seu Usuario:</option>
                    <option value="Cliente">Cliente</option>
                    <option value="Administrador">Administrador</option>
                </select>

                <button type="submit" class="btn-login">Confirmar</button>
                <p>Já tem conta?</p>  
                <a style="color: red;" href="../login_cadastro/login.php">Login</a>
            </form>
        </div>
       </div> 
 
</body>
</html>