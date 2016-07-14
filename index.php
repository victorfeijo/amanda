<!doctype html>
<html lang="pt-BR">
<?php
session_start();

$name="";
$from="";
$message="";
if(isset($_POST['submit'])) {
	$name=$_POST['name'];
	$from=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	define('GUSER', 'inovar.ml.sender@gmail.com');
	define('GPWD', );
	$to=array("amandaknoll@hotmail.com");
	include("inc/class_email_sender.php");
	include("inc/send_email.php");
}
?>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Me contrata Imaginarium!!!</title>
		<meta name="author" content="Amanda Alquini Knoll">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        
        <!-- Google Fonts  -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

		<!-- Skin CSS -->
		<!-- <link rel="stylesheet" href="css/skin/cool-gray.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <link rel="stylesheet" href="css/skin/night-purple.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="/">Amanda</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="body">Início</a></li>
                            <li><a class="page-scroll" href="#about-section">Sobre</a></li>
                            <li><a class="page-scroll" href="#portfolio-section">Trabalhos</a></li>
                            <li><a class="page-scroll" href="#contact-section">Contato</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.jpg);">
				
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">

						<div id="owl-intro-text" class="owl-carousel">
							<div class="item">
								<h1>Imaginarium, me contrata!</h1>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank page-scroll" href="#about-section" role="button">Veja Mais!</a>
							</div>
							<div class="item">
								<h1>Vamos nos conhecer?</h1>
								<p>Vamos fazer um lindo trabalho juntos!</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank page-scroll" href="#about-section" role="button">Veja Mais!</a>
							</div>
							<div class="item">
								<h1>Sou Amanda,</h1>
								<p>(amada por todos)</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank page-scroll" href="#about-section" role="button">Veja Mais!</a>
							</div>
						</div>

					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
                
                
                
            <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>Sobre</h2>
                            <div class="devider"></div>
							<p class="subtitle"> quem é esse ser humaninho? </p>
							<img src="img/perfil.png" style="width: 95%; max-width: 30em;"/>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin rotate box-1 -->
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Me, myself & I</h4>
                                        <p>Meu nome é Amanda Alquini Knoll, tenho 20 anos. Eu amo design, moda e música. Sou movida pela arte. Acredito que o mundo está em constante mudança, logo precisamos girar com ele e buscar sempre inovar, inovar para fazer a diferença!</p>
									</div>
							   </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>O que eu faço?</h4>
                                        <p>Curso Design de Moda na UDESC, estou na 6° fase. Ao longo desse tempo, me vi muito ligada ao design gráfico e a fotografia, então muitas vezes lido com os trabalhos da faculdade como hobbies, e no meu tempo extra, busco aprimorar e pesquisar mais e mais.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Por que eu faço isso? </h4>
                                        <p>Eu realmente me encontrei, compreendo a moda como uma grande expressão visual, capaz de comunicar tudo aquilo que nem sempre dizemos. Me vejo ligada a várias áreas, sou proativa e sempre busco aperfeiçoar meu trabalho e conhecer o novo. Em todo o processo de criação e desenvolvimento, considero como parte indispensável o trabalho em equipe, um bom relacionamento traz um bom resultado!</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                                    <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>Com o que já trabalhei?</h4>
                                        <p> Das experiências que tive com trabalho, nenhuma delas foi diretamente ligada com o meu curso. Trabalhei durante dois anos na empresa da minha família auxiliando na parte administrativa e financeira, bem como na parte de marketing, atuando em costumer service. Trabalhei também no caixa de um restaurante, onde aprendi muito a me relacionar com o cliente. Considero ambas experiências importantes pro meu crescimento pessoal/profissional e sei que me acrescentarão muito em qualquer outra área que eu trabalhe.</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End rotate box-1 -->
                
                <div class="extra-space-l"></div>
                
                <!-- Begin page header--> 
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4>Habilidades</h4>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <!-- Begin Our Skills -->
                <div class="our-skills">
                	<div class="container">
                    	<div class="row">
                        
                        	<div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6>Illustrator</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6>Photoshop</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>Html & Css</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>Fotografia</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End Our Skill -->
          </section>
          <!-- End about section -->

              
              
              
          <!-- Begin cta -->
          <section id="cta-section">
          	<div class="cta">
            	<div class="container">
                	<div class="row">
                    
                    	<div class="col-md-9">
                        	<h1>Faça download do meu currículo!</h1>
							<p> (e veja um pouquinho mais sobre mim)</p>
  
                        </div>
                        
                        <div class="col-md-3">
                        	<div class="cta-btn wow bounceInRight" data-wow-delay="0.4s">
                        <a class="btn btn-default btn-lg" href="curriculum.pdf" target="_blank" role="button">Download</a>
                        	</div>
                        </div>
                        
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
          </section>
          <!-- End cta -->

                
            <!-- Begin Portfolio -->
            <section id="portfolio-section" class="page bg-style1">
            	<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>Meus trabalhos</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">os que me orgulho</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                <div class="portfoloi_content_area" >
                                    <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">all</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".editorial">editorial</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".estamparia" >estamparia</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".desenho-digital">desenho digital</a></li>
                                        </ul>
                                    </div>
                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
                                            <div class="col-xs-12 col-sm-4 editorial">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/k7.jpg" alt="title"/>
                                               
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 editorial">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/k2.jpg" alt="title"/>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 editorial">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/k3.jpg" alt="title"/>
                                         
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 editorial">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/k4.jpg" alt="title"/>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 editorial">
                                                <div class="portfolio_single_content">
                                                    <img src="img//portfolio/k5.jpg" alt="title"/>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 editorial">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/k6.jpg" alt="title"/>
                                                 
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 editorial">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/k1.jpg" alt="title"/>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 estamparia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/e1.jpg" alt="title"/>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 estamparia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/e2.jpg" alt="title"/>
													
												</div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 estamparia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/e3.jpg" alt="title"/>
													
												</div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 estamparia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/e4.jpg" alt="title"/>
													
												</div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 estamparia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/e5.jpg" alt="title"/>
													
												</div>
                                            </div>
											
											<div class="col-xs-12 col-sm-4 estamparia">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/e6.jpg" alt="title"/>
													
												</div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 desenho-digital">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/d1.jpg" alt="title"/>
													
												</div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 desenho-digital">
                                                <div class="portfolio_single_content">
                                                    <img src="img/portfolio/d2.jpg" alt="title"/>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->
            
                
                
            <!-- Begin social section -->
			<section id="social-section">
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Quer stalkear? </h2>
                            <div class="devider"></div>
                            <p class="subtitle">Vem cá!</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="container">
                	<ul class="social-list">
                		<li> <a href="https://www.facebook.com/knollamanda" target="_blank" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
                		<li> <a href="http://amandaknoll.tumblr.com/" target="_blank" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.7s"><span class="rotate-box-icon"><i class="fa fa-tumblr"></i></span></a></li>
                		<li> <a href="https://www.instagram.com/amandaknoll/" target="_blank" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.8s"><span class="rotate-box-icon"><i class="fa fa-instagram"></i></span></a></li>                      
                    </ul>
                </div>
                
            </section>
            <!-- End social section -->
                
                
                
                
            <!-- Begin contact section -->
			<section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/map-bg.jpg);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Contato</h2>
                            <div class="devider"></div>
                            <p class="subtitle">Entra em contato! (eu mereço, né?) </p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Endereço</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Pintor Eduardo Dias, 110<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jardim Atlântico, CEP: 88095-800 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Florianópolis, Santa Catarina, Brasil </li>
			                            <li><i class="fa fa-phone"></i>&nbsp; (48) 8835-4788</li>
			                            <li><i class="fa fa-envelope"></i> amandaknoll@hotmail.com </li>
			                        </ul>
                                </div>
                            </div>
                        
                        	<div class="col-sm-6">
                                <div class="contact-form">
                                	<h4>Manda uma mensagenzinha</h4>
                                    <form id="contactform" name="contactform" action="" method="post">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Seu nome" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control input-lg" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="subject" name="subject" class="form-control input-lg" placeholder="Assunto" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="message" name="message" class="form-control input-lg" rows="5" placeholder="Mensagem" required></textarea>
                                        </div>
                                        <button type="submit" id="submit" name="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Enviar! Go go go</button>
                                    </form>
                                </div>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">Copyright &copy; 2016 - Designed By <a> Amanda Alquini Knoll </a> </p>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
        
        
        <!-- Plugins JS -->
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="js/theme.js"></script>

    </body> 
        
            
</html>
