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
    <link rel="stylesheet" type="text/css"  href="../DecoLivre/lp/css/style.css">
    <title>DecoLivre|Reserva de Passagens</title>
    <script src="https://unpkg.com/axios@0.21.4/dist/axios.min.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>
    <div class="all">
        <header class="center">
            <menu class="menu-wrapper flex">
                <div class="logo">
                    <img src="../DecoLivre/lp/img/decolivredolado5.png" alt="logo">
                </div><!--logo-->        
                <div class="information flex">
                    <a href="../DecoLivre/pages/login_cadastro/listar_usuarios.php">teste usuarios</a>
                    <a href="http://" target="_blank"><i class="fa-solid fa-headphones"><br>AJUDA</i></a><i class="fa-solid fa-grip-lines-vertical"></i>
                    <a href="../DecoLivre/pages/login_cadastro/login.php" target="_blank"><i class="fa-solid fa-user"><br>LOGIN</i></a> 
                </div><!--information center-->
            </menu><!--menu-wrapper center-->
            <nav class="nav-pages flex">
                <li><a href="../DecoLivre/index.php"><i class="fa-solid fa-house"></i><br>INICIO</a></li>
                <li><a href="../DecoLivre/pages/passagens.php" target="_blank"><i class="fa-sharp fa-solid fa-plane"></i><br>PASSAGENS AÉREAS</a></li>
                <li><a href="#"><i class="fa-solid fa-comment-dots"></i><br>COMENTÁRIOS</a></li>
                <li><a href="#"><i class="fa-solid fa-users"></i><br>SOBRE NÓS</a></li>
            </nav><!--nav-page center-->
        </header>
        <main>
            <section>
                <section class="center header-main">
                    <div class="img-wrapper flex">
                        <img src="../DecoLivre/lp/img/img_fundo.jpeg" alt="Aviao no Céu">
                    </div><!--img-header-->
                    <article class="banner sob">
                        <h1>Liberdade para você voar com apenas um click!</h1>
                    </article><!--banner-->
                </section><!--header-main-->

                    <?php

                    include_once '../DecoLivre/app/api/api.php';

                        if(isset($curl)){
                        foreach($response->data as $value){
                            echo '
                            <section class="passagens center">
                                <form class="passagens-form">
                                    <div class="flex">
                                        <div class="box-passagens">
                                            <span>ORIGEM</span>
                                            <input type="text" placeholder="" name='.$value->originPlaceId.'>
                                        </div>
                                        <div class="box-passagens">
                                            <span>DESTINO</span>
                                            <input type="text" placeholder="" name='.$value->destinationPlaceId.'>
                                        </div>
                                        <div class="box-passagens">
                                            <span>IDA</span>
                                            <input type="date" name='.$value->outboundDepartureDate.'>
                                        </div>
                                        <div class="box-passagens">
                                            <span>VOLTA</span>
                                            <input type="date" name="">
                                        </div>
                                        <a href="#" style="margin-left: 2em; width: 25%; height:auto;">
                                            <img src="../DecoLivre/lp/img/loupe.png" alt="Lupa" style="margin-left: 2em; width:25%; heigth:120px;" id="pesquisar" >
                                        </a>
                                        <div class="box-passagens">
                                            <span>PREÇO</span>
                                            <input type="number" name='.$value->price.'>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            ';
                        }
                        }
                        include_once '../DecoLivre/lp/inc/main_ofertas.php';
                        include_once '../DecoLivre/lp/inc/main_comentarios.php';
                        include_once '../DecoLivre/lp/inc/main_sobre_nos.php';
                        include_once '../DecoLivre/lp/inc/footer.php';

                        curl_close($curl);
                        
                        if ($err) {
                            echo "cURL Error #:" . $err;
                        } else {
                            echo $response;
                        }
                    ?>
    <script>
        
    </script>
</body>
</html>

