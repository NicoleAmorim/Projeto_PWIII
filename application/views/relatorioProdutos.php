<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camelô</title>
    <link href="<?php echo base_url('assets/css-padrao/css-padrao.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/main.css');?>" />
    <style>
		body{
            background-image: url(<?php echo base_url('assets/imagens/black2.jpg');?>);
            background-repeat: no-repeat;
            background-size: cover;
        }
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
				<div class="logo"><a href="<?php echo base_url('index.php/Welcome/index')?>">Camelô</a></div>
				<a href="#menu">Menu</a>
			</header>

        <!-- Nav -->
			<nav id="menu" style="background-color: #465902;">
				<ul class="links">
                    <li><a href="<?php echo base_url('index.php/Welcome/index')?>">Sair</a></li>
                    <li><a href="<?php echo base_url('index.php/Welcome/TelaPerfil')?>">Meu Perfil</a></li>
					<li><a href="<?php echo base_url('index.php/Welcome/TelaCadastro')?>">Cadastrar</a></li>
					<li><a href="<?php echo base_url('index.php/Welcome/TelaCadastroProdutos')?>">Cadastrar um novo Produto</a></li>
					<li><a href="<?php echo base_url('index.php/Welcome/TelaRelatorioProdutos')?>">Relatório de Produtos</a></li>
					<li><a href="<?php echo base_url('index.php/Welcome/TelaRelatorioVendas')?>">Relatório de Vendas</a></li>
					<li><a href="<?php echo base_url('index.php/Welcome/TelaCodAlterarProduto')?>">Alterar ou Excluir produto</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img class='card-img-top' src="<?php echo base_url('assets/imagens/acessorios.jpg');?>" alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novos itens maravilhosos do Paraguai</p>
							<h2>Camelô</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo base_url('assets/imagens/acessorios2.jpg');?>" alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novos itens maravilhosos do Paraguai</p>
							<h2>Camelô</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo base_url('assets/imagens/acessorios3.jpg');?>"  alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novos itens maravilhosos do Paraguai</p>
							<h2>Camelô</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo base_url('assets/imagens/acessorios4.jpg');?>"  alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novos itens maravilhosos do Paraguai</p>
							<h2>Camelô</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="<?php echo base_url('assets/imagens/acessorios5.jpg');?>" alt="" />
					<div class="inner">
						<header>
							<p>Nós estamos aqui para te proporcinar novos itens maravilhosos do Paraguai</p>
							<h2>Camelô</h2>
						</header>
					</div>
				</article>
			</section>
			<br><br>
	<header>
		<center><h2 style="color:blanchedalmond;">Relatório de Produtos</h2></center>
	</header>

	<!--Cards-->
	<div class='container my-5'> 
        <div class='row mb-5'> 
        	<!--Card 1-->
            <div class='col-lg-3 col-sm-6'>
                <div class='card h-100'> 
                    <img class='card-img-top' src="<?php echo base_url('assets/imagens/cap.jpg');?>"> 
                    <div class='card-body'> 
                        <h4 class='card-title text-center mb-2'>nome</h4>
                        <br>
                        <h6 class='card-subtitle text-justify'>descricao 
                            <br>
                            <br>
                        </h6>
                        <br>
                    </div>
                    <div class='card-footer bg-white border-0'> 
                        <form action='add_item.php' method='POST'> 
                            <button class='btn btn-block card-link' style="background-color: #465902;"> 
                                <label class='mr-3 mt-2' style="color: black;">preco R$ </label>
                                <img src="<?php echo base_url('assets/imagens/carrinho_p.png');?>"  alt='Carrinho de compras'>  
                            </button>
                        </form>
                    </div>     
                </div>
            </div>
    </div>
    

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