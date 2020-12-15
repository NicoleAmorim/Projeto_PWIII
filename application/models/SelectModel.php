<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SelectModel extends CI_Model {

public function SelecionarProduto($r)
{
        for($i = 1;$i <= $r;) 
        {
          $this->db->where('codProduto', $i);
          $q[$i] = $this->db->get('Produto')->row_array();
          $this->db->where('codProduto', $i);
          $r = $this->db->get('Estoque')->row_array();
          $q[$i]['estoque'] = $r;        
          $i++;
        }     
        return $q;
}
public function SelecionarUltimoProduto()
{
        $this->db->select_max('codProduto');
        $query = $this->db->get('Produto')->row_array();
        return  $query['codProduto'];
}
public function SelecionarProdutoByCod($cod)
{
        $this->db->where('codProduto', $cod);
        $query = $this->db->get('Produto')->row_array();
        return  $query;
}
}
?>