<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Primeiro extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    function index() {
        $dados['titulo'] = 'Está é a página inicial';
        $this->load->view('home', $dados);
    }

    function videos () {
        $dados['titulo'] = 'Está é a página de vídeos';
        $this->load->view('videos', $dados);
    }

    function fotos() {
        $dados['titulo'] = 'Esta é a página de fotos';
        $this->load->view('fotos', $dados);
    }

    function contato() {
        $this->load->helper('form');
        $this->load->library(array('form_validation', 'email'));

        //regras de validaçao do formulário 
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required');
        if ($this->form_validation->run() == FALSE){
            $dados['formerror'] = validation_errors();
        } else {
            $dados_form = $this->input->post();
            $this->email->from($dados_form['email'], $dados_form['nome']);
            $this->email->to('email@email.com');
            $this->email->subject($dados_form['assunto']);
            $this->email->message($dados_form['mensagem']);
            if($this->email->send()){
                $dados['formerror'] = 'Email enviado com sucesso!';
            } else {
                $dados['formerror'] = 'Erro ao enviar email, tente novamente em algusn minutos.';
            }
        }

        $dados['titulo'] = 'Esta é a página de contato';
        $this->load->view('contato', $dados);
    }
}
?>