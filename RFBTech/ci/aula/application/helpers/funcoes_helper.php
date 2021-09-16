<?php
defined('BASEPATH') OR exit('No directo script access allowed');

if (!function_exists('set_msg')){
    //set uma mensagem via session para ser lida posteriormente
    function set_msg($msg=NULL){
        $ci = & get_instance();
        $ci->session->set_userdata('aviso', $msg);
    }
}

if (!function_exists('get_msg')){
    //retorna uma menasgem definida pela função set_msg
    function get_msg($destroy=TRUE) {
        $ci = & get_instance();
        $retorno = $ci->session->userdata('aviso');
        if($destroy) $ci->session->unset_userdata('aviso');
        return $retorno;
    }
}
?>