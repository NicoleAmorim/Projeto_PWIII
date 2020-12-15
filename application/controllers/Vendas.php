<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller {
    public function Seleciona()
	{
        $this->load->model('SelectModel');
        $cods = $this->SelectModel->SelecionarProdutoByCod($this->input->post("codigo"));
        $q = $this->input->post("quantidade");
        $c = $cods['preco'];
        $r = $q*$c;
        $dados = [
            'quantidade' => $q,
            'cpf' => $this->input->post("CPF"),
            'dataVenda' => $this->input->post("dataVenda"),
            'codProduto' => $this->input->post("codigo"),
            'precoUni' => $c,
            'precoFinal' => $r
        ];
     
        $this->load->model('CadastrosModel');
        
        if(empty($dados['codProduto'])){
            echo "ErroCod";
            die();
        }
        if(empty($dados['quantidade'])){
            echo "ErroQuantidade";
            die();
        }
        if(empty($dados['dataVenda']))
        {
            echo "ErroData";
            die();
        }
        if($this->CadastrosModel->CadastrarVenda($dados, $dados['quantidade'])){
            $this->load->view('relatorioVendas');
        }
        else
        {
            echo "ErroVenda";
            die();
        }
    }
}
?>