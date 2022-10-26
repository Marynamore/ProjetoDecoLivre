<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/lp/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/lp/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="lp/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="lp/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/lp/favicon_io/site.webmanifest">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>DecoLivre|Reserva de Passagens</title>
</head>
<body>
    <div class="all">
        <header class="center">
            <menu class="menu-wrapper flex">
                <div class="logo">
                    <img src="lp/img/decolivredolado5.png" alt="logo">
                </div><!--logo-->
                <section class="input-search">
                    <div class="search-box">
                        <input type="text" class="search-txt" placeholder="Pesquisar"><!--search-text-->
                        <a href="#">
                            <img src="/lp/img/loupe.png" alt="Lupa">
                        </a>
                    </div><!--search-box-->                    
                    <form action="" method="POST">
                    </form><!--POST-->                    
                </section><!--input-search-->        
                <div class="information flex">
                    <a href="http://" target="_blank"><i class="fa-solid fa-headphones"><br>AJUDA</i></a><i class="fa-solid fa-grip-lines-vertical"></i><a href="/login/login.php" target="_blank"><i class="fa-solid fa-user"><br>LOGIN</i></a> 
                </div><!--information center-->
            </menu><!--menu-wrapper center-->
            <nav class="nav-pages flex">
                <li><a href="index.php"><i class="fa-solid fa-house"></i><br>INICIO</a></li>
                <li><a href="/pages/passagens.php" target="_blank"><i class="fa-sharp fa-solid fa-plane"></i><br>PASSAGENS AÉREAS</a></li>
                <li><a href="index.php"><i class="fa-solid fa-comment-dots"></i><br>COMENTÁRIOS</a></li>
                <li><a href="index.php"><i class="fa-solid fa-users"></i><br>SOBRE NÓS</a></li>
            </nav><!--nav-page center-->
        </header>
        <main>
            <section>
                <section class="center header-main">
                    <div class="img-wrapper flex">
                        <img src="lp/img/img_fundo.jpeg" alt="Aviao no Céu">
                    </div><!--img-header-->
                    <article class="banner sob">
                        <h1>Liberdade para você voar com apenas um click!</h1>
                    </article><!--banner-->
                </section><!--header-main-->
                <section class="center ofertas-main">
                    <div class="ofertas-title flex sob">
                        <h2>Ofertas Especiais</h2>
                    </div><!--ofertas-title-->
                    <section class="ofertas flex">
                        <aside class="sidebar-oferta">
                            <a href="/login/login.php" target="_blank">
                                <img src="lp/img/hotel40banner.webp" alt="">
                            </a> 
                        </aside><!--sidebar-ofertas-->
                        <aside class="sidebar-oferta">
                            <a href="/login/login.php" target="_blank">
                                <img src="lp/img/madrugadaofertasbanner.webp" alt="">
                            </a>
                        </aside><!--sidebar-ofertas-->
                        <aside class="sidebar-oferta">
                            <a href="/login/login.php" target="_blank" rel="noopener noreferrer">
                                <img src="lp/img/passagensinternacionaisbanner.webp" alt="">
                            </a>
                        </aside><!--sidebar-ofertas-->
                    </section><!--ofertas-->
                </section><!--ofertas-main-->
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
            </section><!--center-->                 
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
                </section><!--vitrine-international-->
            </section><!--center-->
            <section class="comentarios about">
                <p> COMENTÁRIOS </p>
            </section>
            <section class=" bg0">
                <div class="center about-container">
                    <article class="about-article">
                        <h2>Sobre a sua empresa</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nisi optio provident dignissimos quae
                            suscipit veniam nostrum aspernatur voluptatem quis, deleniti alias officiis laborum a incidunt? Modi
                            molestiae fugit labore Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur animi
                            eligendi error consequuntur, iste consectetur labore cumque? Eligendi fugiat molestias obcaecati
                            provident rem vitae possimus tempore labore. 
                        </p>
                    </article><!--about-article-->
                </div><!--about-container-->
            </section>
        </main><!--center-->
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
</body>
</html>

