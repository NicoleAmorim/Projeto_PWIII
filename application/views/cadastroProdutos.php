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
                        <p>um novo produto</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form class="register-form" action="<?php  echo base_url('index.php/ValidarCadastros/ValidarCadastroProduto')?>" method="POST" id="cadastroProduto">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="NameProduto" class="required">Nome do Produto</label>
                                    <input type="text" name="nomeProduto" id="nomeProduto" />
                                </div>
                                <div class="form-input">
                                    <label for="CodProduto" class="required">Código do Produto</label>
                                    <input type="text" name="codProduto" id="codProduto" />
                                </div>
                                <div class="form-input">
                                    <label for="Preco" class="required">Preço Unitário</label>
                                    <input type="text" name="preco" id="preco" placeholder="R$00,00"/>
                                </div>
                                <div class="form-input">
                                    <label for="Descricao">Descrição</label>
                                    <input type="text" name="descricao" id="descricao" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="marca">Marca</label>
                                        <a href="#" class="form-link">Lunch detail</a>
                                    </div>
                                    <div class="select-list">
                                        <select name="marca" id="maca">
                                            <option value="Indefinida">Indefinida</option>
                                            <option value="Adidas">Adidas</option>
                                            <option value="Nike">Nike</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="Quantidade" class="required">Quantidade</label>
                                    <input type="text" name="quantidade" id="quantidade" />
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input class="submit" type="submit" value="Cadastrar" name="cadastro" id="Cadastro" />
                            <input class="submit" type="submit" value="Limpar" name="limpar" id="Limpar" />
                        </div>
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