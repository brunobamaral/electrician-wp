<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- carregamento das meta tags -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge, Chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="author" content="Bruno B. Amaral" />
		<meta name="robots" content="index,follow" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- carregamento dos styles -->
		<link rel="icon" type="image/x-icon" href="<?=get_template_directory_uri();?>/asset/image/favicon.png" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/asset/bower_components/font-awesome/css/font-awesome.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/asset/bower_components/bootstrap/dist/css/bootstrap.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" media="all" />
		<title>Elétrico</title>
	</head>
	<body>
		<div id="box">
			<div class="container news visible-xs">
				<div class="row wrapper">
					<div class="col-xs-4 label-news">Notícias:</div>
					<div class="col-xs-8 label-content"><marquee>Lorem ipsum dolor sit amet.</marquee></div>
				</div>
			</div><!-- .news -->
			<header class="container header">
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 wrapper">
						<h1 class="col-xs-9 col-md-3 col-lg-4 logo">
							<a href="#"><img src="<?= get_template_directory_uri();?>/asset/image/logo.png" alt="" /></a>
						</h1>
						<button type="button" class="navbar-toggle collapsed mobile-menu" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<p class="text-center hidden-xs hidden-sm col-md-4 col-md-offset-5 col-lg-5 col-lg-offset-3 cta-header">
							Precisando de um eletricista? Ligue já: (85) 9.8852-3501
						</p>
					</div>
				</div>
			</header><!-- .header -->
			<nav class="container menu">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-md-12 menu-content">
						<div id="main-menu" class="col-lg-8 col-md-8 collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li><a href="#">Home</a></li>
								<li><a href="#">Serviços</a></li>
								<li><a href="#">Galeria</a></li>
								<li><a href="#">Clientes</a></li>
								<li><a href="#">Artigos</a></li>
								<li><a href="#">Notícias</a></li>
								<li><a href="#">Contato</a></li>
							</ul>
						</div>
						<form class="hidden-xs col-lg-4 col-md-4 input-group">
							<input type="text" name="" class="form-control" placeholder="encontre aqui ..." />
							<span class="input-group-btn">
								<button class="btn btn-warning">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</form>
					</div>
				</div>
			</nav>
			<div class="container cta-header-mobile visible-xs">
				<div class="row">
					<div class="col-xs-12 wrapper">
						<h3>Precisando de um eletricista? Ligue já: (85) 9.8852-3501</h3>
					</div>
				</div>
			</div>
			<main class="container content">
				<div class="row">
					<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1 first-wrapper">
						<div id="carrosel" data-interval="4500" class="slide carousel col-md-8" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<a href="#">
										<img class="" src="image/carrosel/banner-1.jpg" alt="" />
									</a>
								</div>
								<div class="item">
									<a href="#">
										<img class="" src="image/carrosel/banner-2.jpg" alt="" />
									</a>
								</div>
								<div class="item">
									<a href="#">
										<img class="" src="image/carrosel/banner-3.jpg" alt="" />
									</a>
								</div>
								<a href="#carrosel" class="left carousel-control" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hiden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a href="#carrosel" class="right carousel-control" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hiden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="col-md-4 more-read hidden-xs">
							<div class="panel panel-default panel-warning row">
								<p class="panel-heading">Mais populares</p>
								<ul class="list-group">
									<li class="list-group-item">
										<a href="#">
											<img class="img-responsive" src="http://placehold.it/100x100/ccc/eee" style="float:left;" />
										</a>
										<h2><a href="#">Titulo da postagem</a></h2>
										<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et.
										</p>
									</li>
									<li class="list-group-item">
										<a href="#">
											<img class="img-responsive" src="http://placehold.it/100x100/ccc/eee" style="float:left;" />
										</a>
										<h2><a href="#">Titulo da postagem</a></h2>
										<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et.
										</p>
									</li>
								</ul>
							</div>
						</div>
						<p class="col-md-12 noticia hidden-xs">
							<span class="col-md-3">ÚLTIMAS NOTICIAS: </span>
							<em class="col-md-9">
								<marquee>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.
								</marquee> 
							</em>
						</p>
					</div>
				</div>
				<div class="row visible-xs">
					<div class="col-xs-12 second-wrapper-mobile">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="text-center">CONFIRA: ALGUNS SERVIÇOS!</h3>
							</div>
							<div class="panel-body">
								<div class="serviços">
									<img src="image/serviço/padrao.png" alt="" />
									<h3 class="title-serviço">Titulo Serviço 01</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row hidden-xs">
					<div class="col-lg-10 col-lg-offset-1 second-wrapper">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="text-center">CONFIRA: ALGUNS DE NOSSOS SERVIÇOS!</h3>
							</div>
							<div class="panel-body">
								<div class="col-md-3 service">
									<h3 class="title-service">Titulo da postagem</h3>
									<img src="http://placehold.it/300x200/ccc/eee" />
								</div>
								<div class="col-md-3 service">
									<h3 class="title-service">Titulo da postagem</h3>
									<img src="http://placehold.it/300x200/ccc/eee" />
								</div>
								<div class="col-md-3 service">
									<h3 class="title-service">Titulo da postagem</h3>
									<img src="http://placehold.it/300x200/ccc/eee" />
								</div>
								<div class="col-md-3 service">
									<h3 class="title-service">Titulo da postagem</h3>
									<img src="http://placehold.it/300x200/ccc/eee" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row visible-xs">
					<div class="col-xs-12 third-wrapper-mobile">
						<div class="sidebar">
							<form class="form-group">
								<label for="s">Pesquisar por:</label>
								<div class="input-group">
									<input type="text" class="form-control" name="s" placeholder="encontre aqui ...">
									<span class="input-group-btn">
										<button class="btn btn-warning" type="button">
											<span class="glyphicon glyphicon-search"></span>
										</button>
									</span>
								</div>
							</form>
							<div class="facebox">
								<img src="image/facebook.png" style="width:100%" />
							</div>
							<div class="panel panel-default sidebar-article-title">
								<h3 class="panel-heading">ALGUMAS PESQUISAS</h3>
								<div class="panel-body">
									<a href="#" class="tag">instalação</a>
									<a href="#" class="tag">eletricidade</a>
									<a href="#" class="tag">chuveiro elétrico</a>
									<a href="#" class="tag">execução de projeto</a>
									<a href="#" class="tag">ar-comprimido</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row hidden-xs">
					<div class="col-md-12 col-lg-10 col-lg-offset-1 third-wrapper">
						<div class="col-md-8 posts">
							<article class="post col-md-12">
								<div class="col-md-4">
									<img class="thumb-post" src="http://placehold.it/200x150/ccc/eee" />
								</div>
								<h3 class="title-post">Titulo da postagem exibido aqui</h3>
								<p class="resumo-post">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.
								</p>
							</article>
							<article class="post col-md-12">
								<div class="col-md-4">
									<img class="thumb-post" src="http://placehold.it/200x150/ccc/eee" />
								</div>
								<h3 class="title-post">Titulo da postagem exibido aqui</h3>
								<p class="resumo-post">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.
								</p>
							</article>
							<article class="post col-md-12">
								<div class="col-md-4">
									<img class="thumb-post" src="http://placehold.it/200x150/ccc/eee" />
								</div>
								<h3 class="title-post">Titulo da postagem exibido aqui</h3>
								<p class="resumo-post">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat.
								</p>
							</article>
						</div>
						<aside class="col-md-4 sidebar hidden-xs">
							<div class="panel panel-default">
								<h3 class="panel-heading">CURTA NOSSA FANPAGE</h3>
								<div class="panel-body">
									<img src="image/facebook.png" />
								</div>
								<h3 class="panel-heading">ALGUMAS PESQUISAS</h3>
								<div class="panel-body">
									<a href="#" class="tag">instalação</a>
									<a href="#" class="tag">eletricidade</a>
									<a href="#" class="tag">chuveiro elétrico</a>
									<a href="#" class="tag">execução de projeto</a>
									<a href="#" class="tag">ar-comprimido</a>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</main>
			<footer class="container footer">
				<div class="row cta-footer">
					<p class="col-lg-10 col-lg-offset-1 cta-box">
						<strong>Ligue agora para <u>(85) 9.8852-3501</u> e peça um orçamento!</strong>
					</p>
				</div>
				<div class="row footer-footer">
					<p class="col-lg-10 col-lg-offset-1 navbar navbar-default">
						<small class="navbar-text">&copy; Todos os direitos reservados.</small>
					</p>
				</div>
			</footer>
		</div>
		<!-- carregamento dos scripts -->
		<script type="text/javascript" src="<?=get_template_directory_uri();?>/asset/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="<?=get_template_directory_uri();?>/asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="script/script.js"></script>
	</body>
</html>