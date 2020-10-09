<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympéa</title>
    <link href="<?php echo base_url('assets/css-padrao/css-padrao.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css-custom/main.css');?>" />
    <style>
        body{
            background-image: url(<?php echo base_url('assets/imagens/fumaca.jpg');?>);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1, h2, small, a, label, button, input {
	        font-family: Industry, monospace;
            color: white;
        }
        .borda{
            border-top: 50px;
            border-radius: 25px !important;
            border-width: 5px !important;
            border-style: solid !important;
            border-color: #2dd9d0 !important;
            width: 90%; 
            padding-top: 1%;
            margin: 0px auto;
            float: none;
            background-color: rgb(245,245,245,0.15);
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
            <br><br>
    <!--Login-->
    <div class="container row my-5 mx-auto borda ">
    <div class="col-lg-6 text-center ">
        <h1 class="display-5">Já sou usuário da Olympéa</h1>
            <small id="emailHelp" class="form-text text-muted ">Insira o seu e-mail e a sua senha para se identificar.</small>
            <form  action="<?php  echo base_url('index.php/Login/ValidarLogin')?>" method="POST" id="login">
                <div class="form-row">
                    <div class="col-md-9 my-1 mx-auto">        
                        <label class="form-text text-muted text-justify distancia5" for="User">Email</label>
                    </div>    
                </div>
                <div class="form-row">
                    <div class="col-lg-9 my-1 mx-auto"> 
                        <input class="form-control form-control-lg" id="user" name="user" type="text" placeholder="Digite seu e-mail" name="user">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-9 my-1 mx-auto">
                        <label class="form-text text-muted text-justify" for="Pass">Senha</label>
                    </div>    
                </div>
                    <div class="form-row">
                        <div class="col-lg-9 my-1 mx-auto">
                            <input class="form-control form-control-lg" id="pass" name="pass" type="password" placeholder="Digite sua senha" name="pass">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="my-5 mx-auto col-lg-6">
                            <input class="form-control col-6 btn" style="background-color: #2dd9d0;" type="submit" value="Acessar">
                        </div>
                    </div>
            </form>
            <div class="form-row">
                <div class="col-lg-5 ml-auto text-center">
                    <a class="nav-link"> </a>
                </div>
            </div>
        </div>
    <!--Fim Login-->
    <!--Cadastro-->
    <div class="col-lg-6 text-center">
        <h1 class="display-5">Cadastre-se</h1>
        <form  method="POST">
            <small id="emailHelp" class="form-text text-muted distancia6">Se ainda não tem uma conta de usuário da Olympéa, utilize esta opção para acessar o formulário de registro.</small>
            <div class="form-row">
                <div class="my-5 mx-auto col-lg-6">
                <a class="form-control col-6 btn" style="background-color: #2dd9d0;" href="index.html" role="button">Cadastrar</a>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-5 ml-auto text-center">
                    <a class="nav-link"></a>
                </div>
            </div>
        </form>
    </div>
    <!--Fim Cadastro-->

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