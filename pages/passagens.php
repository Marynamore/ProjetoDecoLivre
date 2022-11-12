<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../lp/favicon_io/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../lp/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../lp/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../lp/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../lp/site.webmanifest">
    <link rel="stylesheet" href="../lp/css/style.css">
    <title>Passagens Aéreas</title>
</head>
<body>
    <div class="all">
        <header class="center">
            <menu class="menu-wrapper flex">
                <div class="logo">
                    <img src="../lp/img/decolivredolado5.png" alt="logo">
                </div><!--logo-->
                <section class="input-search">
                    <div class="search-box">
                        <input type="text" class="search-txt" placeholder="Pesquisar"><!--search-text-->
                        <a href="#">
                            <img src="../lp/img/loupe.png" alt="Lupa">
                        </a>
                    </div><!--search-box-->                    
                    <form action="" method="POST">
                    </form><!--POST-->                    
                </section><!--input-search-->        
                <div class="information flex">
                    <a href="http://" target="_blank"><i class="fa-solid fa-headphones"><br>AJUDA</i></a><i class="fa-solid fa-grip-lines-vertical"></i><a href="../pages/login_cadastro/login.php" target="_blank"><i class="fa-solid fa-user"><br>LOGIN</i></a> 
                </div><!--information center-->
            </menu><!--menu-wrapper center-->
            <nav class="nav-pages flex">
                <li><a href="../index.php"><i class="fa-solid fa-house"></i><br>INICIO</a></li>
                <li><a href="#"><i class="fa-sharp fa-solid fa-plane"></i><br>PASSAGENS AÉREAS</a></li>
                <li><a href="../index.php"><i class="fa-solid fa-comment-dots"></i><br>COMENTÁRIOS</a></li>
                <li><a href="../index.php"><i class="fa-solid fa-users"></i><br>SOBRE NÓS</a></li>
            </nav><!--nav-page center-->
        </header>
        <section class="center header-main">
            <div class="img-wrapper flex">
                <img src="../lp/img/img-2.jpg" alt="">
            </div><!--img-header-->
            <article class="banner sob">
                <h1>A CAMINHO DA LIBERDADE!</h1>
            </article><!--banner-->
        </section><!--header-main-->
        <section class="passagens center">
            <form action="passagens_form.php" method="GET" class="passagens-form">
                <div class="flex">
                    <div class="box-passagens">
                        <span>ORIGEM</span>
                        <input type="text" placeholder="" name="originPlaceId">
                    </div>
                    <div class="box-passagens">
                        <span>DESTINO</span>
                        <input type="text" placeholder="" name="destinationPlaceId">
                    </div>
                    <div class="box-passagens">
                        <span>IDA</span>
                        <input type="date" name="outboundDepartureDate">
                    </div>
                    <div class="box-passagens">
                        <span>VOLTA</span>
                        <input type="date" name="">
                    </div>
                    <input type="enviar" value="enviar" class="btn" name="">
                </div>
            </form>
        </section>

        <main class="center">
            <section class="campo-select flex center">
                <div class="campo-title">
                    <h2>
                        <strong>Passagens Aéreas Promocionais</strong> saindo de:
                    </h2>
                </div><!--campo-title-->
                <div class="option-main">
                    <select name="" id="" >
                    <option value="BSB">Brasília</option>
                    <option value="GRU">São Paulo</option>
                    <option value="GIG">Rio de Janeiro</option>
                    <option value="SSA">Salvador</option>
                    <option value="REC">Recife</option>
                    <option value="FOR">Fortaleza</option>
                    <option value="POA">Porto Alegre</option>
                    <option value="CWB">Curitiba</option>
                    <option value="CNF">Belo Horizonte</option>
                    <option value="FLN">Florianópolis</option>
                    <option value="BEL">Belém</option>
                    <option value="GYN">Goiânia</option>
                    <option value="VIX">Vitória</option>
                    <option value="MCZ">Maceió</option>
                    <option value="JPA">João Pessoa</option>
                    <option value="NAT">Natal</option>
                    <option value="SLZ">São Luís</option>
                    <option value="CGB">Cuíaba</option>
                    <option value="MAO">Manaus</option>
                    </select><i class="fa-solid fa-location-dot"></i>
                </div><!--option_main-->
                <form action="#passagens-promo" method="POST">
                    <input class="brk__return--origem" name="brk" type="hidden" value="BSB">
                    <input class="brk__return--local" name="brkLocal" type="hidden" value="Brasilia">
                </form>
            </section><!--campo_select-->                
            <section class="center"> 
                <div class="vitrine-title flex">
                    <h2>Passagens Aéreas Nacionais</h2>
                </div><!--vitrine-title-->
                <section class="vitrine-national flex">                                 
                    <aside class="box-vitrine">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/9d/43/9e/aig-mre.jpg?w=1200&h=-1&s=1" alt="Brasilia"><br><br>
                        <h4>Brasilia</h4><br>
                        <a href="" target="_blank">Veja mais!</a>
                    </aside><!--box-vitrine-->
                    <aside class="box-vitrine">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/08/79/e7/a2/catedral-metropolitana.jpg?w=1200&h=-1&s=1" alt="Brasilia"><br><br>
                        <h4>Brasilia</h4><br>
                        <a href="" target="_blank">Veja mais!</a>
                    </aside><!--box-vitrine-->
                    <aside class="box-vitrine">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/40/b4/95/pontao-a-noite.jpg?w=600&h=-1&s=1" alt="Brasilia"><br><br>
                        <h4>Brasilia</h4><br>
                        <a href="" target="_blank">Veja mais!</a>
                    </aside><!--box-vitrine-->
                    <aside class="box-vitrine">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/9d/43/9e/aig-mre.jpg?w=1200&h=-1&s=1" alt="Brasilia"><br><br>
                        <h4>Brasilia</h4><br>
                        <a href="" target="_blank">Veja mais!</a>
                    </aside><!--box-vitrine-->
                </section><!--vitrine-national-->
            </section><!--center-->
            <section class="center"> 
                <div class="vitrine-title flex vitrine-title-inter">
                    <h2>Passagens Aéreas International</h2>
                </div><!--vitrine-title, vitrine-title-inter-->
                <section class="vitrine-international flex">                                 
                    <aside class="box-vitrine">
                        <img src="https://content.skyscnr.com/b62fd4346123d1eb9f7525c8f72f2a8a/stock-photo-new-york-city-at-twilight-128894587.jpg?crop=400px:400px&quality=75" alt="Brasilia"><br><br>
                        <h4>New York</h4><br>
                        <a href="" target="_blank">Veja mais!</a>
                    </aside><!--box-vitrine-->
                    <aside class="box-vitrine">
                        <img src="https://content.skyscnr.com/f4333b3908e186ecd7e134239339c24d/boston.jpg?crop=400px:400px&quality=75" alt="Brasilia"><br><br>
                        <h4>Boston</h4><br>
                        <a href="" target="_blank">Veja mais!</a>
                    </aside><!--box-vitrine-->
                    <aside class="box-vitrine">
                        <img src="https://content.skyscnr.com/419f8c4a179ee821eea90f7e2c60f85f/eyeem-26050318-95055228.jpg?crop=400px:400px&quality=75" alt="Brasilia"><br><br>
                        <h4>Washington</h4><br>
                        <a href="" target="_blank">Veja mais!</a>
                    </aside><!--box-vitrine-->
                    <aside class="box-vitrine">
                        <img src="https://content.skyscnr.com/e8876138a899f8e239785a906becdeb0/GettyImages-505892311.jpg?crop=400px:400px&quality=75" alt="Brasilia"><br><br>
                        <h4>Maiami</h4><br>
                        <a href="" target="_blank">Veja mais!</a>
                    </aside><!--box-vitrine-->
                </section><!--vitrine-international-->
            </section>
        </main>
        <footer class="footer">
            <div class="center">
                <div class="icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-telegram"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div><!--icons-->
                <p>Template desenvolvido por <cite>Marina, Raiane, Ryan</cite> na data: 06/outubro/2022</p>
            </div><!--center-->
        </footer><!--footer-->
    </div><!--all-->

<!--Script javascript-->
<script src="/js/script.js"></script>
</body>
</html>
