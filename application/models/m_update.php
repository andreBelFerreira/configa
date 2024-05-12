<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_update extends CI_Model
{
    public function favorito()
    {
        $param = $this->input->post();

        $ID = $param['id'];

        $this->db->where('id', $ID);
        $query = $this->db->get('livros');

        if ($query[0]['FAVORITO'] !== 'F') {
            $data = array(
                'FAVORITO' => 'F'
            );
        } else {
            $data = array(
                'FAVORITO' => ''
            );
        }

        $this->db->where('id', $ID);
        $retorno = $this->db->update('mytable', $data);

        return $retorno;
    }
}
