<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_home');
    }

    public function retornoLivro()
    {
        $this->load->model('m_retorno');
        $retorno = $this->m_retorno->retornoLivro();
        echo json_encode($retorno);
    }

    public function cadastroLivro()
    {
        $this->load->model('m_insert');
        $retorno = $this->m_insert->cadastroLivro();
        echo $retorno;
    }

    public function deleteLivro()
    {
        $this->load->model('m_delete');
        $retorno = $this->m_delete->deleteLivro();
        echo $retorno;
    }

    public function favorito()
    {
        $this->load->model('m_update');
        $retorno = $this->m_update->favorito();
        echo $retorno;
    }

    public function retFavorito()
    {
        $favorito = $this->input->post('favorito');
        $this->load->model('m_retorno');
        $retorno = $this->m_retorno->retornoLivro($favorito);
        echo json_encode($retorno);
    }
}
