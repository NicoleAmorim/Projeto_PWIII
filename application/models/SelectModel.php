<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidarCadastros extends CI_Model {

public function SelecionarProduto($codBarras)
{
        $this->db->where('codBarras', $codBarras);
        $resultado = $this->db->get("Produto")->row_array();
        return $resultado;
}

}
?>