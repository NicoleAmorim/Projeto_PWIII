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
        .border{
            margin-top: 35px;
        }
        .border2{
            margin-top: 40px;
        }
        .center{
            display: inline-block;
            position: relative;
            margin-left: 250px;
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
                        <h2>Vendas</h2>
                        <p>Comprar um produto</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form class="register-form" action="<?php  echo base_url('index.php/Selecionar/Seleciona')?>" method="POST" id="Produto">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="CodProduto" class="required">Código do Produto</label>
                                    <input type="text" name="codProduto" id="codProduto" <?php try{echo 'value="'.$codProduto.'"';}catch(Exception $e){}?>/>
                                    <img src="<?php echo base_url('assets/imagens/search2.png');?>"  alt="" />
                                    <input class="submit" type="submit" value="buscar" name="buscar" id="buscar" />
                                </div>
                                </div>
                                </div>
                                </form>
                                <form class="register-form" action="" method="POST" id="cadastroProduto">
                                <div class="form-row">
                                <div class="form-group">
                                <div class="form-input">
                                    <label for="Quantidade" class="required">Quantidade</label>
                                    <input type="text" name="quantidade" id="quantidade" />
                                </div>
                                
                                <div class="form-input">
                                    <label for="CPF" >CPF (Opcional)</label>
                                    <input type="text" name="CPF" id="CPF" placeholder="000.000.000.00"/>
                                </div>
                                <div class="form-input border2">
                                    <label for="dataVenda" class="required">Data da Venda</label>
                                    <input type="text" name="dataVenda" id="dataVenda" placeholder="01/01/2020"/>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="form-input">
                                    <label for="Preco" class="required">Preço Unitário</label>
                                    <label for="Preco"><?php try{echo $preco;}catch(Exception $e){}?></label>
                                </div>
                                <div class="form-input border">
                                    <label for="PrecoFinal">Nome Produto</label>
                                    <label for="ValorFinal"><?php try{echo $nomeProduto;}catch(Exception $e){}?></label>
                                </div>
                                <div class="form-input " style="margin-top: 70px;">
                                    <input class="submit" type="submit" value="Concluir" name="concluir" id="Concluir" />
                                    <input class="submit" type="submit" value="Limpar" name="limpar" id="Limpar" />
                                </div>
                            </div>
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