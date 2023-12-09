<?php 

include_once '../src/cabecalho.php';

require_once "../repositorio/conexao.php";
require_once "../Modelo/Produto.php";
require_once "../repositorio/produtoRepositorio.php";

$produtoRepositorio = new produtoRepositorio($conn);
$produtos = $produtoRepositorio->listarProdutos();

?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="../assets/img/logo.png" alt=""> -->
        <h1>Sushiyama<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#events">Eventos</a></li>
          <li><a href="#chefs">Chefes</a></li>
          <li><a href="#gallery">Galeria</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="cadastrar-usuario.php">Cadastrar usuário</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <a class="btn-book-a-table" href="login.php">Login</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <a class="btn-book-a-table" href="cadastrar-produto.php">Cadastrar produtos</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Aproveite nossa<br>comida deliciosa</h2>
          <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a class="btn-book-a-table" href="cadastrar-usuario.php">Cadastrar usuário</a>
            <a href="https://youtu.be/0-ncyfpe_7Q?si=u8FG_7Qb0m05yOqE" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Assista um Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="../assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sobre a gente</h2>
          <p>Saiba <span>Sobre a gente</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(../assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Pegue uma mesa</h4>
              <p>+55-11950942364</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="../assets/img/about-22.png" class="img-fluid" alt="">
                <a href="https://youtu.be/0-ncyfpe_7Q?si=u8FG_7Qb0m05yOqE" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Porque escolher Sushiyama?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Saiba mais <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Corporis voluptates officia eiusmod</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore pan</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clientes</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projetos</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Horas de atedimento</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Funcionários</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nosso Menu</h2>
          <p>Confira <span>Nosso Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Entradas</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Pratos</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Sobremesas</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Entradas</h3>
            </div>

            <div class="row gy-5">

            <?php 
              foreach ($produtos as $produto) :
                if ($produto->getTipo() === 'Entrada') :
            ?> 
                <div class="col-lg-4 menu-item">
                  <a href="../assets/img/menu/<?= $produto->getImagem(); ?>" class="glightbox"><img src="../assets/img/menu/<?= $produto->getImagem(); ?>" class="menu-img img-fluid" alt=""></a>
                  <h4><?= $produto->getNome(); ?></h4>
                  <p class="ingredients">
                    <?= $produto->getDescricao(); ?>
                  </p>
                  <p class="price">
                    <?= $produto->getPreco(); ?>
                  </p>
                </div>
            <?php
                endif; 
              endforeach;
            ?>
            </div>
              <!-- <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/sunomono2.png" class="glightbox"><img src="../assets/img/menu/sunomono2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Sunomono 2</h4>
                <p class="ingredients">
                  Sunomono acompanhado com atum grelhado
                </p>
                <p class="price">
                  R$10,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/ceviche.png" class="glightbox"><img src="../assets/img/menu/ceviche.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ceviche</h4>
                <p class="ingredients">
                  Salmão cru marinado no suco de limão
                </p>
                <p class="price">
                  R$13.99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/ceviche2.png" class="glightbox"><img src="../assets/img/menu/ceviche2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Ceviche 2</h4>
                <p class="ingredients">
                  Polvo marinado no suco de limão 
                </p>
                <p class="price">
                  R$12.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/tirashi.png" class="glightbox"><img src="../assets/img/menu/tirashi.png" class="menu-img img-fluid" alt=""></a>
                <h4>Tirashi</h4>
                <p class="ingredients">
                  Arroz de sushi acompanhado de fatias de legumes e peixe cru
                </p>
                <p class="price">
                  R$18,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/Rolinho.png" class="glightbox"><img src="../assets/img/menu/Rolinho.png" class="menu-img img-fluid" alt=""></a>
                <h4>Harumaki</h4>
                <p class="ingredients">
                  Rolinho recheado com legumes e camarão
                </p>
                <p class="price">
                  R$14,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/temaki.png" class="glightbox"><img src="../assets/img/menu/temaki.png" class="menu-img img-fluid" alt=""></a>
                <h4>Temaki</h4>
                <p class="ingredients">
                  Cone de alga recheado com gohan e salmão
                </p>
                <p class="price">
                  R$22,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/shimeji.png" class="glightbox"><img src="../assets/img/menu/shimeji.png" class="menu-img img-fluid" alt=""></a>
                <h4>Shimeji</h4>
                <p class="ingredients">
                  Shimeji grelhado na chapa
                </p>
                <p class="price">
                  R$12,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/Arroz.png" class="glightbox"><img src="../assets/img/menu/Arroz.png" class="menu-img img-fluid" alt=""></a>
                <h4>Gohan</h4>
                <p class="ingredients">
                  Arroz japonês
                </p>
                <p class="price">
                  R$7,59
                </p>
              </div>

            </div> -->
          </div>

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Pratos</h3>
            </div>
            
            <div class="row gy-5">

            <?php 
              foreach ($produtos as $produto) :
                if ($produto->getTipo() === 'Principal') :
            ?> 
                <div class="col-lg-4 menu-item">
                  <a href="../assets/img/menu/<?= $produto->getImagem(); ?>" class="glightbox"><img src="../assets/img/menu/<?= $produto->getImagem(); ?>" class="menu-img img-fluid" alt=""></a>
                  <h4><?= $produto->getNome(); ?></h4>
                  <p class="ingredients">
                    <?= $produto->getDescricao(); ?>
                  </p>
                  <p class="price">
                    <?= $produto->getPreco(); ?>
                  </p>
                </div>
            <?php
                endif; 
              endforeach;
            ?>

            <!--

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/lamem1.png" class="glightbox"><img src="../assets/img/menu/lamem1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Lamem de porco</h4>
                <p class="ingredients">
                  Macarrão acompanhado de carne de porco legumes e caldo
                </p>
                <p class="price">
                  R$44,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/lamem3.png" class="glightbox"><img src="../assets/img/menu/lamem3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Lamem de porco empanado</h4>
                <p class="ingredients">
                Macarrão acompanhado de carne de porco empanada legumes e caldo
                </p>
                <p class="price">
                  R$45,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/robata.png" class="glightbox"><img src="../assets/img/menu/robata.png" class="menu-img img-fluid" alt=""></a>
                <h4>Robata</h4>
                <p class="ingredients">
                  Legumes grelhados servidos num prato
                </p>
                <p class="price">
                  R$25,00
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/sushi1.png" class="glightbox"><img src="../assets/img/menu/sushi1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Combo Sushi 1</h4>
                <p class="ingredients">
                  35 peças de sushi
                </p>
                <p class="price">
                  R$74,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/sushi2.png" class="glightbox"><img src="../assets/img/menu/sushi2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Combo sushi 2</h4>
                <p class="ingredients">
                  15 peças de sushi
                </p>
                <p class="price">
                  R$31,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/sushi3.png" class="glightbox"><img src="../assets/img/menu/sushi3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Combo sushi 3</h4>
                <p class="ingredients">
                  20 peças de sushi 
                </p>
                <p class="price">
                  R$38,00
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/barca.png" class="glightbox"><img src="../assets/img/menu/barca.png" class="menu-img img-fluid" alt=""></a>
                <h4>Barca</h4>
                <p class="ingredients">
                  40 peças de sushi
                </p>
                <p class="price">
                  R$80,00
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/curry.png" class="glightbox"><img src="../assets/img/menu/curry.png" class="menu-img img-fluid" alt=""></a>
                <h4>Curry</h4>
                <p class="ingredients">
                  Carne ao molho picante com arroz
                </p>
                <p class="price">
                  R$28,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/katsudon.png" class="glightbox"><img src="../assets/img/menu/katsudon.png" class="menu-img img-fluid" alt=""></a>
                <h4>Katsudon</h4>
                <p class="ingredients">
                  Carne de porco empanada com gohan
                </p>
                <p class="price">
                  R$35,00
                </p>
              </div>-->


            </div>
          </div>

          <div class="tab-pane fade" id="menu-dinner">

          <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Sobremesas</h3>
            </div>

            <div class="row gy-5">
            
            <?php 
              foreach ($produtos as $produto) :
                if ($produto->getTipo() === 'Sobremesa') :
            ?> 
                <div class="col-lg-4 menu-item">
                  <a href="../assets/img/menu/<?= $produto->getImagem(); ?>" class="glightbox"><img src="../assets/img/menu/<?= $produto->getImagem(); ?>" class="menu-img img-fluid" alt=""></a>
                  <h4><?= $produto->getNome(); ?></h4>
                  <p class="ingredients">
                    <?= $produto->getDescricao(); ?>
                  </p>
                  <p class="price">
                    <?= $produto->getPreco(); ?>
                  </p>
                </div>
            <?php
                endif; 
              endforeach;
            ?>

              <!--
                <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/Mochi.png" class="glightbox"><img src="../assets/img/menu/Mochi.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mochi</h4>
                <p class="ingredients">
                  Bolinho de massa de arroz doce
                </p>
                <p class="price">
                  R$10,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/Crepe.png" class="glightbox"><img src="../assets/img/menu/Crepe.png" class="menu-img img-fluid" alt=""></a>
                <h4>Crepe</h4>
                <p class="ingredients">
                  Massa recheada com chocolate
                </p>
                <p class="price">
                  R$17,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/Anmitsu.png" class="glightbox"><img src="../assets/img/menu/Anmitsu.png" class="menu-img img-fluid" alt=""></a>
                <h4>Anmitsu</h4>
                <p class="ingredients">
                  Pequenos cubos de açucar com frutas variadas
                </p>
                <p class="price">
                  R$13.99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/Dango.png" class="glightbox"><img src="../assets/img/menu/Dango.png" class="menu-img img-fluid" alt=""></a>
                <h4>Dango</h4>
                <p class="ingredients">
                  Bolinhos doce servidos no palito
                </p>
                <p class="price">
                  R$15,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/Wagashi.png" class="glightbox"><img src="../assets/img/menu/Wagashi.png" class="menu-img img-fluid" alt=""></a>
                <h4>Wagashi</h4>
                <p class="ingredients">
                  Massa de feijão com farinha de arroz
                </p>
                <p class="price">
                  R$25,99
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="../assets/img/menu/Taiyaki.png" class="glightbox"><img src="../assets/img/menu/Taiyaki.png" class="menu-img img-fluid" alt=""></a>
                <h4>Taiyaki</h4>
                <p class="ingredients">
                  Massa rechada com doce de feijão
                </p>
                <p class="price">
                  R$19,99
                </p>
              </div>-->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Experiências</h2>
          <p>O que estão <span>Falando da gente</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Essa manu podia ta no cardapio também
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Emily Rharysa</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../assets/img/testimonials/Emy.png" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                       Gostei do local
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Gustavo Pequeno</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../assets/img/testimonials/Guga.png" class="img-fluid testimonial-img quadrado" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                       Ameei nota dez
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Fillip Mangia</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../assets/img/testimonials/Fillip.png" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Muito legal!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jennifer</h3>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="../assets/img/testimonials/Jenni.png" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Eventos</h2>
          <p>Compartilhe <span>Seus momentos</span> Em nosso estabelecimento</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(../assets/img/events-1.jpg)">
              <h3>Festas Customizadas</h3>
              <div class="price align-self-start">R$899</div>
              <p class="description">
                Organize uma festa do jeito que você preferir em nosso restaurante
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(../assets/img/events-2.jpg)">
              <h3>Festas Privadas</h3>
              <div class="price align-self-start">R$189</div>
              <p class="description">
                Uma festa apenas para os mais próximos
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(../assets/img/events-3.jpg)">
              <h3>Festas de Aniversário</h3>
              <div class="price align-self-start">R$1299</div>
              <p class="description">
                Um momento memorável no melhor local que você poderia realizar
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefes</h2>
          <p>Nossos <span>Chefes</span> Profissionais</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="../assets/img/chefs/Pedro.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Pedro Hipólito</h4>
                <span>Master Chef</span>
                <p>Especialista em pratos da culinária casual japonesa.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="../assets/img/chefs/Manu.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Manuelle Morais</h4>
                <span>Master chef</span>
                <p>Especialista em diversos doces.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="../assets/img/chefs/Vini.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Vinicius Tavares</h4>
                <span>Master chef</span>
                <p>Especialista em pratos picantes</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

  

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>galeria</h2>
          <p>Confira <span>Nossa casa</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../assets/img/gallery/gallery-1.jpg"><img src="../assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../assets/img/gallery/gallery-2.jpg"><img src="../assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../assets/img/gallery/gallery-3.jpg"><img src="../assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../assets/img/gallery/gallery-4.jpg"><img src="../assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../assets/img/gallery/gallery-5.jpg"><img src="../assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../assets/img/gallery/gallery-6.jpg"><img src="../assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../assets/img/gallery/gallery-7.jpg"><img src="../assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="../assets/img/gallery/gallery-8.jpg"><img src="../assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Endereço</h4>
            <p>
              Rua Juscelino da fonseca <br>
              Brasil<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservas</h4>
            <p>
              <strong>Phone:</strong> +55-950942364<br>
              <strong>Email:</strong> Sushiyama@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Estamos abertos</h4>
            <p>
              <strong>11AM</strong>11PM<br>
              Domingo: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Nos acompanhe</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sushiyama</span></strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->

      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>