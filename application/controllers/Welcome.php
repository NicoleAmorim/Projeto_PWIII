<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function TelaPerfil()
	{
		$this->load->view('perfil');
	}
	public function TelaCadastro()
	{
		$this->load->view('cadastro');
	}
	public function TelaCadastroProdutos()
	{
		$this->load->view('cadastroProdutos');
	}
	public function TelaRelatorioProdutos()
	{
		$this->load->view('RelatorioProdutos');
	}
	public function TelaVendas()
	{
		$this->load->view('vendas');
	}
	public function TelaRelatorioVendas()
	{
		$this->load->view('relatorioVendas');
	}
	public function TelaCodAlterarProduto()
	{
		$this->load->view('codAlterarProduto');
	}
	public function TelaAlterarExcluirProdutos()
	{
		$this->load->view('alterarExcluirProdutos');
	}
}
