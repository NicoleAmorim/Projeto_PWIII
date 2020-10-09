<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function ValidarLogin()
	{
        $usuario = $this->input->post("user");
        //user é o name do input da view
        $usuario = $this->input->post("pass");
        //pass é o name do input da view

        if(empty($user)){
            echo "ErroUser";
            die();
        }
        if(empty($pass)){
            echo "ErroPass";
            exit();
        }
        else{
            echo "Sucesso";
        }

    }
}
