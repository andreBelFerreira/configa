<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class m_retorno extends CI_Model
{
    public function retornoLivro()
    {
        $query = $this->db->get('livros');
        return $query->result();
    }
}
