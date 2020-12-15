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
		$this->load->model('SelectModel');
		$i['ultimo'] = $this->SelectModel->SelecionarUltimoProduto();
		$i['oi'] = $this->SelectModel->SelecionarProduto($i['ultimo']);
		$this->load->view('RelatorioProdutos', $i);
	}
	public function TelaVendas()
	{
		$this->load->model('SelectModel');
		$cods = $this->SelectModel->SelecionarProdutoByCod('1');
		$this->load->view('vendas', $cods);
	}
	public function TelaRelatorioVendas()
	{
		$this->load->model('SelectModel');
		$i['ultimo'] = $this->SelectModel->SelecionarUltimoVenda();
		$i['oi'] = $this->SelectModel->SelecionarVenda($i['ultimo']);
		$this->load->view('relatorioVendas', $i);
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
