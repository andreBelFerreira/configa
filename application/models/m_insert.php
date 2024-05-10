<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_insert extends CI_Model
{
    public function cadastroLivro()
    {
        $param = $this->input->post();

        $data = array(
            'TITULO' => $param['txtTitulo'],
            'DESCRICAO' => $param['txtDescricao'],
            'AUTOR' => $param['txtAutor'],
            'URL' => $param['txtURL']
        );

        $retorno = $this->db->insert('livros', $data);

        return $retorno;
    }
}
