<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $this->load->model('m_retorno');
        $retorno['livros'] = $this->m_retorno->retornoLivro();
        $this->load->view('v_home', $retorno);
    }

    public function cadastroLivro()
    {
    }
}
