<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Principal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function index() {
        $this->load->view('home');
    }

    function fotos() {
        $this->load->view('fotos');
    }

    function videos() {
        $this->load->view('videos');
    }

    function contato() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('telefone', 'Telefone', 'trim|required');
        $this->form_validation->set_rules('comentario', 'Comentario', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $dados['formerror'] = validation_errors();
        } else {
            $dados['formerror'] = 'Cadastro realizado com sucesso!';
        }

        $this->load->view('contato', $dados);
    }
}
?>