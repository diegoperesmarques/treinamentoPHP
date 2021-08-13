<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
	public function index()	{
        $dados['titulo'] = 'Essa é a minha primeira view';
        $dados['conteudo'] = 'The page you are looking at is being generated dynamically by CodeIgniter.';
		$this->load->view('exemplo1', $dados);
	}

    function login() {
        echo 'executado método login do controller e passado o parâmetro';
        echo $this->uri->segment(3);
    }
}
