<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selecionar extends CI_Controller {
    public function Seleciona()
	{
        $cod = $this->input->post("codProduto");
     
        $this->load->model('SelectModel');

        if(empty($cod)){
            echo "ErroCod";
            die();
        }
        $cods = $this->SelectModel->SelecionarProdutoByCod($cod);
        if(empty($cods))
        {
            echo "ErroCodN";
            die();
        }else{
            $this->load->view('vendas', $cods);
        }
    }
}
?>