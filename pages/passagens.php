<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/lp/favicon_io/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/lp/favicon_io/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="lp/favicon_io/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="lp/favicon_io/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/lp/favicon_io/favicon_io/site.webmanifest">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Passagens</title>
</head>
<body>
    <div class="all">
        <header class="center">
            <menu class="menu-wrapper flex">
                <div class="logo">
                    <img src="/lp/img/decolivredolado5.png" alt="logo">
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
                <li><a href="/pages/passagens.php"><i class="fa-sharp fa-solid fa-plane"></i><br>PASSAGENS AÉREAS</a></li>
                <li><a href="index.php"><i class="fa-solid fa-comment-dots"></i><br>COMENTÁRIOS</a></li>
                <li><a href="index.php"><i class="fa-solid fa-users"></i><br>SOBRE NÓS</a></li>
            </nav><!--nav-page center-->
        </header>
        <section class="center header-main">
            <div class="img-wrapper flex">
                <img src="lp/img/img_fundo.jpeg" alt="Aviao no Céu">
            </div><!--img-header-->
            <article class="banner sob">
                <h1>ENCONTRE SEU MELHOR DESTIVO COM DECOLIVRE!</h1>
            </article><!--banner-->
        </section><!--header-main-->
        <section class="passagens">
            <form action="passagens_form.php" method="post" class="passagens-form">
                <div class="flex">
                    <div class="box-passagens">
                        <span>ORIGEM</span>
                        <input type="text" placeholder="" name="location">
                    </div>
                    <div class="box-passagens">
                        <span>DESTINO</span>
                        <input type="text" placeholder="" name="guests">
                    </div>
                    <div class="box-passagens">
                        <span>IDA</span>
                        <input type="date" name="arrivals">
                    </div>
                    <div class="box-passagens">
                        <span>VOLTA</span>
                        <input type="date" name="leaving">
                        <input type="submit" value="submit" class="btn" name="send">
                    </div>
                </div>
            </form>
        </section>
        <main class="center">
            <section class="passagens-main">
            <h1 class="passagens-title">top destinations</h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="images/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-7.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-8.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-9.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-10.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-11.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-12.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

            </div>

            <div class="load-more"><span class="btn">load more</span></div>

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
