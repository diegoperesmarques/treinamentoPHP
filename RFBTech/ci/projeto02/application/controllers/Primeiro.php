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
        $dados['titulo'] = 'Esta é a página de contato';
        $this->load->view('contato', $dados);
    }
}
?>