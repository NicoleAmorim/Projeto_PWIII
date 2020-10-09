<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympéa</title>
	<link href="<?php echo base_url('assets/css-padrao/css-padrao.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css-padrao/cadastro.css');?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css-custom/main.css');?>" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
    <!--Form Cadastro-->
    <form class="newsletter-form" action="<?php  echo base_url('index.php/ValidarCadastros/ValidarCadastro')?>" method="POST" id="cadastro">
        <div class="newsletter-form-lightbox">
            <div class="newsletter-form-heading">Inscreva-se</div>
    <!-- Dados pessoais -->
    <div class="newsletter-form-row">
      <div class="newsletter-form-columns">
        <div class="newsletter-form-columns__item">
          <div class="newsletter-form-item">
            <input id="nome" name="nome" type="text" class="newsletter-form-item__input" aria-labelledby="nome">
            <label for="Name" class="newsletter-form-item__label">Nome Completo*</label>
          </div>
        </div>
        <div class="newsletter-form-columns__item">
          <div class="newsletter-form-item">
            <input id="userName" name="userName" type="text" class="newsletter-form-item__input" aria-labelledby="userName">
            <label for="User" class="newsletter-form-item__label">Nome de usuário*</label>
          </div>
        </div>
      </div>
    </div>
    <div class="newsletter-form-row">
      <div class="newsletter-form-item">
        <input id="email" name="email" type="text" class="newsletter-form-item__input" aria-labelledby="email" >
        <label for="Email" class="newsletter-form-item__label">Email válido*</label>
      </div>
    </div>
    <div class="newsletter-form-row">
      <div class="newsletter-form-item">
        <input id="cpf" name="cpf" type="text" class="newsletter-form-item__input" aria-labelledby="cpf" >
        <label for="Cpf" class="newsletter-form-item__label">CPF*</label>
      </div>
	</div>
    <div class="newsletter-form-row">
      <div class="newsletter-form-columns">
        <div class="newsletter-form-columns__item">
          <div class="newsletter-form-item">
            <input id="senha" name="senha" type="password" class="newsletter-form-item__input" aria-labelledby="senha" >
            <label for="Senha" class="newsletter-form-item__label">Senha*</label>
          </div>
        </div>
        <div class="newsletter-form-columns__item">
          <div class="newsletter-form-item">
            <input id="confSenha" name="confSenha" type="password" class="newsletter-form-item__input" aria-labelledby="confSenha" >
            <label for="ConfSenha" class="newsletter-form-item__label">Confirmar senha*</label>
          </div>
        </div>
      </div>
    </div>
	<input class="newsletter-form-submit" type="submit" value="Cadastrar" name="cadastro" id="Cadastro">
    </div>
  </div>
</form>
    

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