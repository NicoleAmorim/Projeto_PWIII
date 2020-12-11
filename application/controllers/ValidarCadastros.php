<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidarCadastros extends CI_Controller {

	public function ValidarCadastro()
	{
        $dados = [
            'nome' => $this->input->post("nome"),
            'email' => $this->input->post("email"),
            'userName' => $this->input->post("userName"),
            'tipo' => "cliente",
            'cpf' => $this->input->post("cpf"),
            'senha' => $this->input->post("senha"),
        ];
        $confSenha = $this->input->post("confSenha");
        
        //$this->load->library('session');
        //$this->session->email = $dados['email'];
        //$this->session->userName = $dados['userName'];

        //echo"Sucesso";
        //die();

        $this->load->model('CadastrosModel');

        //$nome = $this->input->post("nome");
        //$email = $this->input->post("email");

        if(empty($dados['nome'])){
            echo "ErroNome";
            die();
        }
        
        if(empty($dados['userName'])){
            echo "ErroUserName";
            die();
        }

        $resultado = $this->CadastrosModel->VerificarUserName($dados['userName']);

        if($resultado != ""){
            echo "ErroUserNameExiste";
            die();
        }

        if(empty($dados['email'])){
            echo "ErroEmail";
            die();
        }

        $resultado = $this->CadastrosModel->VerificarEmail($dados['email']);

        if($resultado != ""){
            echo "ErroEmailExiste";
            die();
        }

        if(empty($dados['cpf'])){
            echo "ErroCPF";
            die();
        }

        $resultado = $this->CadastrosModel->VerificarCPF($dados['cpf']);

        if($resultado != ""){
            echo "ErroCPFExiste";
            die();
        }

        if(empty($dados['senha'])){
            echo "ErroSenha";
            die();
        }


        if($confSenha != $dados['senha']){
            echo "ErroSenhaNaoConfere";
            die();
        }

        if($this->CadastrosModel->CadastrarUsuario($dados)){
            //$this->load->library('session');
            //$this->session->email = $dados['email'];
            echo "Sucesso";
            die();
        }
        else{
            echo "ErroCadastro";
            exit();
        }
        
    }

    public function ValidarCadastroProduto()
	{
            $dados = [
                'nomeProduto' => $this->input->post("nomeProduto"),
                'preco' => $this->input->post("preco"),
                'descricao' => $this->input->post("descricao"),
                'marca' => $this->input->post("marca"),
            ];
            $quantidade = $this->input->post("quantidade");

            //$this->load->library('session');
            //$this->session->email = $dados['email'];
            //$this->session->userName = $dados['userName'];
    
            //echo"Sucesso";
            //die();
    
            $this->load->model('CadastrosModel');
    
            //$nome = $this->input->post("nome");
            //$email = $this->input->post("email");
    
            if(empty($dados['nomeProduto'])){
                echo "ErroNome";
                die();
            }
            
            if(empty($quantidade)){
                echo "ErroQuantidade";
                die();
            }
    
            if(empty($dados['preco'])){
                echo "ErroPreco";
                die();
            }
    
            if(empty($dados['descricao'])){
                echo "ErroDescricao";
                die();
            }
    
            if(empty($dados['marca'])){
                echo "ErroMarca";
                die();
            }
    
            if($this->CadastrosModel->CadastrarProduto($dados, $quantidade)){
                //$this->load->library('session');
                //$this->session->email = $dados['email'];
                echo "Sucesso";
                die();
            }
            else{
                echo "ErroCadastro";
                exit();
            }
            
        }
        

    public function ValidarCodAlterarProduto()
	{
        $codProduto = $this->input->post("codProduto");

        $this->load->model('CadastrosModel');

        $resultado = $this->CadastrosModel->VerificarCodProduto(['codProduto']);

        if($resultado == ""){
            echo "ErroCodProdutoNaoExiste";
            die();
        }

        if(empty($dados['codProduto'])){
            echo "ErroCodProduto";
            die();
        }

        if($this->CadastrosModel->CodAlterarProduto($dados)){
            echo "Sucesso";
            die();
        }
        else{
            echo "ErroCodAlterarProduto";
            exit();
        }
        
    }

}