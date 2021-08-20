<?php
defined('BASEPATH') OR exit('No script allowd access');

class Setup extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('option_model', 'option'); //Nome do model, apelido do model
    }

    function index() {
        if($this->option->get_option('setup_executado') == 1) {
            //setup ok, mostrar tela para editar dados de setup
            redirect('setup/alterar', 'refresh');
        } else {
            redirect('setup/instalar', 'refresh');
        }
    }

    function instalar() {
        if($this->option->get_option('setup_executado') == 1) {
            //setup ok, mostrar tela para editar dados de setup
            redirect('setup/alterar', 'refresh');
        }

        $dados['titulo'] = 'RBernardi - Setup do sistema';
        $dados['h2'] = 'Setup do sistema';
        $this->load->view('painel/setup', $dados);
    }
}
?>