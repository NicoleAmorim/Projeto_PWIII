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
        .margin{
            margin-left: 130px;
        }
        
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header" class="alt" >
		<div class="logo"><a  href="<?php echo base_url('index.php/Welcome/index')?>">Camelô</a></div>
		<a class="nav-link margin" href="<?php echo base_url('index.php/Welcome/TelaCadastro')?>">Cadastrar</a>
		<a class="nav-link margin" href="<?php echo base_url('index.php/Welcome/TelaCadastroProdutos')?>">Cadastrar um novo Produto</a>
        <a class="nav-link margin" href="<?php echo base_url('index.php/Welcome/TelaRelatorioProdutos')?>">Relatório de Produtos</a>	
        <a class="nav-link margin" href="<?php echo base_url('index.php/Welcome/TelaRelatorioVendas')?>">Relatório de Vendas</a>
        <a class="nav-link margin" href="<?php echo base_url('index.php/Welcome/TelaCodAlterarProduto')?>">Alterar ou Excluir produto</a>
        <a class="nav-link margin" href="<?php echo base_url('index.php/Welcome/index')?>">Sair</a>
    </header>
    <br><br> 

    <!--Form Cadastro-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/style2.css');?>" />
    <div class="main">
    <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="<?php echo base_url('assets/imagens/ft2.jpg');?>" alt="">
                    <div class="signup-img-content">
                        <h2>Cadastrar</h2>
                        <p>um novo funcionário</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form class="register-form"action="<?php  echo base_url('index.php/ValidarCadastros/ValidarCadastro')?>" method="POST" id="cadastro">
                    <center>    
                        <br><br><br><br>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="Name" class="required">Nome Completo</label>
                                    <input type="text" name="nome" id="nome" />
                                </div>
                                <div class="form-input">
                                    <label for="Email" class="required">Email Válido</label>
                                    <input type="text" name="email" id="email" placeholder="email@gmail.com"/>
                                </div>
                                <div class="form-input">
                                    <label for="Senha" class="required">Senha</label>
                                    <input type="password" name="senha" id="senha" placeholder="**********"/>
                                </div>
                            </div>
                            <div class="form-group">
                               <div class="form-input">
                                    <label for="User" class="required">Nome de Usuário</label>
                                    <input type="text" name="userName" id="userName" />
                                </div>
                                <div class="form-input">
                                    <label for="Cpf" class="required">CPF</label>
                                    <input type="text" name="cpf" id="cpf" placeholder="000.000.000.00"/>
                                </div>
                                <div class="form-input">
                                    <label for="ConfSenha" class="required">Confirmar Senha</label>
                                    <input type="text" name="confSenha" id="confSenha" placeholder="**********"/>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div>
                            <input class="submit" type="submit" value="Cadastrar" name="cadastro" id="Cadastro"/>
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

</body>
</html>