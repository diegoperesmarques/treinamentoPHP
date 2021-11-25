<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Option_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_option($option_name) {
        $this->db->where('options_name', $option_name);
        $query = $this->db->get('options', 1);

        if ($query->num_rows() == 1) {
            $row = $query->row();
            return $row->options_value;
        } else {
            return NULL;
        }
    }


    public function update_option($option_name, $option_value) {
        $this->db->where('option_name', $option_name);
        $query = $this->db->get('options', 1);
        if($query->num_rows() == 1) {
            //opção já existe, devo atualizar
            $this->db->set('option_value', $option_value);
            $this->db->where('option_name', $option_name);
            $this->db->update('options');
            return $this->db->affected_rows();

        } else {
            //opção não existe, devo inserir
            $dados = array(
                'option_name' => $option_name,
                'option_value' => $option_value
            );
            $this->db->inser('options', $dados);
            return $this->db->insert_id();
        }
    }
}
?>