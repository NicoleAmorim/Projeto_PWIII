<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrosModel extends CI_Model {

    /*Cadastro de Usuario*/
    public function CadastrarUsuario($dados)
    {
        return $this->db->insert('Usuario', $dados);
    }
    public function VerificarUserName($userName)
    {
        $this->db->where('userName', $userName);
        $resultado = $this->db->get("Usuario")->row_array();
        return $resultado;
    }
    public function VerificarEmail($email)
    {
        $this->db->where('email', $email);
        $resultado = $this->db->get("Usuario")->row_array();
        return $resultado;
    }
    public function VerificarCPF($cpf)
    {
        $this->db->where('cpf', $cpf);
        $resultado = $this->db->get("Usuario")->row_array();
        return $resultado;
    }

    /* Cadastro de Produto*/
    public function CadastrarProduto($dados, $quantidade)
    {
        $this->db->insert('Produto', $dados);
        $this->db->where('nomeProduto', $dados['nomeProduto']);
        $resultado = $this->db->get("Produto")->row_array();
        $estoque = [
            'codProduto' => $resultado['codProduto'],
            'quantidade' => $quantidade
        ];
        return $this->db->insert('Estoque', $estoque);
    }
    public function CadastrarVenda($dados, $quantidade)
    {
        $this->db->insert('Vendas', $dados);
        $this->db->where('codProduto', $dados['codProduto']);
        $resultado = $this->db->get("Estoque")->row_array();
        $estoque = [
            'codProduto' => $resultado['codProduto'],
            'quantidade' => $resultado['quantidade'] - $quantidade
        ];
        $this->db->where('codProduto', $dados['codProduto']);
        return $this->db->update('Estoque', $estoque);
    }
    
    public function VerificarCodBarras($codBarras)
    {
        $this->db->where('codBarras', $codBarras);
        $resultado = $this->db->get("Produto")->row_array();
        return $resultado;
    }

    /* Codigo Alterar Produto*/
    public function VerificarCodProduto($codProduto)
    {
        $this->db->where('codProduto', $codProduto);
        $resultado = $this->db->get("Produto")->row_array();
        return $resultado;
    }

}
?>