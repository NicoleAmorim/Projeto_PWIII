<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function ValidarLogin()
	{
        
        $user = $this->input->post("user");
        //user é o name do input da view
        $pass = $this->input->post("pass");
        //pass é o name do input da view

        $this->load->model('LoginModel');

        if(empty($user)){
            echo "ErroUser";
            die();
        }
        if(empty($pass)){
            echo "ErroPass";
            die();
        }
        $resultado = $this->LoginModel->LoginUsuario($user, $pass);
        if(!empty($resultado)){
            echo "Sucesso";
            die();
        }
        if(empty($resultado)){
            echo "ErroLogin";
            die();
        }

    }
}
