<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_delete extends CI_Model
{
    public function deleteLivro()
    {
        $param = $this->input->post();
        $retorno = $this->db->delete('livros', array('id' => $param['id']));
        return $retorno;
    }
}
