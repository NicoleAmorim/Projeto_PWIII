<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camelô</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/main.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/material-icon/css/material-design-iconic-font.min.css');?>">
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

    <!--Form Cadastro-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/style2.css');?>" />
    <div class="main">
    <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="<?php echo base_url('assets/imagens/ft2.jpg');?>" alt="">
                    <div class="signup-img-content">
                        <h2>Insira o Código do Produto</h2>
                        <p>Para localizá-lo e conseguir realizar as alterações ou exclusões</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form class="register-form" action="<?php  echo base_url('index.php/ValidarCadastros/ValidarCodAlterarProduto')?>" method="POST" id="codAlterarProduto">
                        <center>
                            <br><br><br><br>
                            <div class="form-input">
                                <h4><b style="color: #465902;">Digite o código do produto para obter as informações</b></h4>
                                <br><br>
                                <label for="CodProduto" class="required">Código do Produto</label>
                                <input type="text" name="codProduto" id="codProduto" />
                            </div>
                            <br><br>
                            <div>
                                <input class="submit" type="submit" value="Acessar" name="Acessar" id="Acessar" />
                            </div>
                        </center>
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
    <script src="<?php echo base_url('assets/jquery/jquery.min.js');?>"></script>

</body>
</html>