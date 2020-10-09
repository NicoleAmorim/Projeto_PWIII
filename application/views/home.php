<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympéa</title>
    <link href="<?php echo base_url('assets/css-padrao/css-padrao.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/main.css');?>" />
    <style>
        .module_top, .module_bottom{
            visibility: hidden;
        }
        table {
            border: 0px !important;
        }
        .module_content img{
            min-width: 70px;
        }
        .module_content h2{
            font-size: 30px;
        }
    </style>
</head>
<body>
    	<!-- Header -->
           <header id="header" class="alt">
				<div class="logo"><a href="<?php echo base_url('index.php/Welcome/index')?>">Olympéa</a></div>
				<a href="#menu">Menu</a>
			</header>

        <!-- Nav -->
			<nav id="menu" style="background-color: #2dd9d0;">
				<ul class="links">
					<li><a href="<?php echo base_url('index.php/Welcome/index')?>">Home</a></li>
					<li><a href="<?php echo base_url('index.php/Welcome/TelaLogin')?>">Logar</a></li>
					<li><a href="<?php echo base_url('index.php/Welcome/TelaCadastro')?>">Cadastrar</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="<?php echo base_url('assets/imagens/blusa2.jpg');?>" alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novas roupas maravilhosas</p>
							<h2>Olympéa</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo base_url('assets/imagens/suit.jpg');?>" alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novas roupas maravilhosas</p>
							<h2>Olympéa</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo base_url('assets/imagens/ft3.jpg');?>"  alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novas roupas maravilhosas</p>
							<h2>Olympéa</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo base_url('assets/imagens/jeans4.jpg');?>"  alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novas roupas maravilhosas</p>
							<h2>Olympéa</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo base_url('assets/imagens/ft6.jpg');?>" alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novas roupas maravilhosas</p>
							<h2>Olympéa</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">
						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo base_url('assets/imagens/ft4.jpg');?>" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>Temos vários tipos de roupas por preços acessiveis!</p>
										<h2>Está a procura de produtos mais baratos?</h2>
									</header>
									<p>Venha nos conhecer através dos nossos produtos! Você vai se apaixonar!</p>
									<footer class="align-center">
										<a href="<?php echo base_url('index.php/Welcome/TelaCadastroCL')?>" class="button alt">Cadastre-se</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo base_url('assets/imagens/blusa6.jpg');?>" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>Tomos roupas para todos os gostos e tamanhos!</p>
										<h2>Procura produtos que se encaixem em seu estilo?</h2>
									</header>
									<p>Basta se cadastrar e adicionar ao seu carrinho tudo o que quiser!</p>
									<footer class="align-center">
										<a href="<?php echo base_url('index.php/Welcome/TelaCadastroCL')?>" class="button alt">Cadastre-se</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Nossos funcionários estão prontos para te responder!</p>
						<h2>Faça Seu pedido!</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">Uma maneira facil de comprar novas roupas!</p>
						<h2>Não perca essa oportunidade!</h2>
					</header>
					<div class="gallery">
						<div>
							<div class="image fit">
								<a href="#"><img src="<?php echo base_url('assets/imagens/classic.jpg');?>" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="<?php echo base_url('assets/imagens/ft1.jpg');?>" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="<?php echo base_url('assets/imagens/ft2.jpg');?>" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="<?php echo base_url('assets/imagens/ft5.jpg');?>" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</section>


		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>
    

    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.scrollex.min.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/jquery/dist/skel.min.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/jquery/dist/util.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/jquery/dist/main.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js');?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js');?>"></script>
    <script src="<?php echo base_url('assets/javascript/validacoes.js');?>"></script>
</body>
</html>