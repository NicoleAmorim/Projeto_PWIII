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
        .border{
            margin-top: 35px;
        }
        .borderLeft{
            margin-left: 350px;
        }
        .center{
            display: inline-block;
            position: relative;
            margin-left: 200px;
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
        .containerEstoque{
            border-radius: 15px;
            color: white;
            cursor: pointer;
            background-color: #465902;
            opacity: 10px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 10px;
        }
        .imgEstoque{
            padding: 10px;
            border-radius: 15px;
            width: 150px;
            height: 150px;
        }
        .aligncard{
            float: right;
            text-align: right;
        }
        .textEstoque{
            font-size: 18px;
        }
        .textEstoqueQuant{
            font-size: 18px;
        }
        .CardEstoque:hover{
            background-color: #465902;
        }
        .CardEstoque{
            cursor: pointer;
            border-radius: 15px;
        }
        .margin{
            margin-left: 130px;
        }

    </style>
    <script type="text/javascript">
            function Invest($cod)
            {
                window.location.replace('TelaVendas');
            }
    </script>
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
                    <form class="register-form row g-2 center" action="" method="POST" id="relatorioVendas">
                        <div class="col-auto">
                            <label for="Nome Produto">Nome do Produto</label>
                            <input class="form-control mr-sm-2" type="text" name="nomeProduto" id="nomeProduto" placeholder="Acessorios"/>
                        </div>
                        <div class="col-auto border">
                            <input class="submit my-2 my-sm-0" type="submit" value="Buscar" name="buscar" id="Buscar"/>
                        </div>
                    </form>
                    <?php
                    if(!empty($ultimo))
                    {
                    for( $i = 1; $i <= $ultimo;)
                    {
                            echo '
                            <div onclick=Invest('.$oi[$i]["codProduto"].'); class="row col-12 max-heigh mb-4 containerEstoque ml-auto mr-auto mt-4">
                                <div class="row col-12 CardEstoque">
                                    <img class="imgEstoque" src="';echo base_url("assets/imagens/acessorios.jpg"); echo '">
                                    <div class="col-4">
                                        <p class="mt-2 textEstoque">Nome: </p>
                                        <p class="mt-2 textEstoque">Código do produto: </p>
                                        <p class="mt-2 textEstoque">Descrição:</p>
                                        <p class="mt-4 align-bottom textEstoque">Preço:</p>
                                        <p class="mt-1 textEstoque">Estoque: </p>
                                    </div>                  
                                    <div class="col-5 aligncard borderLeft">
                                        <p class="mt-4 align-bottom textEstoque">'.$oi[$i]["nomeProduto"].'</p>
                                        <p class="mt-4 align-bottom textEstoque">'.$oi[$i]["codProduto"].'</p>
                                        <p class="mt-4 align-bottom textEstoque">'.$oi[$i]["descricao"].'</p>
                                        <p class="mt-4 align-bottom textEstoque">'.$oi[$i]["preco"].'</p>
                                        <p class="mt-4 align-bottom textEstoque">'.$oi[$i]["estoque"]["quantidade"].'</p>
                                    </div>
                                </div>
                            </div>';
                
                $i++;
                    }
                }
                ?>
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