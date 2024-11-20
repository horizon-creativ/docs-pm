<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Section extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MSection');
    }

    public function index()
    {
        $data['title'] = 'Section';
        $data['sections'] = $this->MSection->get();
        $this->load->view('Theme/Header', $data);
        $this->load->view('Theme/Menu');
        $this->load->view('Section/Index');
        $this->load->view('Theme/Footer');
        $this->load->view('Theme/Scripts');
    }

    public function form($id = null)
    {
        $data['title'] = 'Add Section';
        $this->load->view('Theme/Header', $data);
        $this->load->view('Theme/Menu');
        if ($id == null) {
            $this->load->view('Section/FormCreate');
        } else {
            $data['section'] = $this->MSection->getById($id);
            $this->load->view('Section/FormEdit', $data);
        }
        $this->load->view('Theme/Footer');
        $this->load->view('Theme/Scripts');
    }

    public function create()
    {
        $query = $this->MSection->create();

        if ($query) {
            $this->session->set_flashdata('success', 'Berhasil menambah data section');
            redirect('section');
        } else {
            $this->session->set_flashdata('failed', 'Gagal menambah data section');
            redirect('section');
        }
    }

    public function update($id)
    {
        $query = $this->MSection->update($id);

        if ($query) {
            $this->session->set_flashdata('success', 'Berhasil mengubah data section');
            redirect('section');
        } else {
            $this->session->set_flashdata('failed', 'Gagal mengubah data section');
            redirect('section');
        }
    }

    public function delete($id)
    {
        $query = $this->MSection->destroy($id);

        if ($query) {
            $this->session->set_flashdata('success', 'Berhasil menghapus data section');
            redirect('section');
        } else {
            $this->session->set_flashdata('failed', 'Gagal menghapus data section');
            redirect('section');
        }
    }
}
