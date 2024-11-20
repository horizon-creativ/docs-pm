<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MItem');
        $this->load->model('MSection');
    }

    public function index()
    {
        $data['title'] = 'Section';
        $data['items'] = $this->MItem->get();
        $this->load->view('Theme/Header', $data);
        $this->load->view('Theme/Menu');
        $this->load->view('Item/Index');
        $this->load->view('Theme/Footer');
        $this->load->view('Theme/Scripts');
    }

    public function form($id = null)
    {
        $data['title'] = 'Add Section';
        $data['sections'] = $this->MSection->get();
        $this->load->view('Theme/Header', $data);
        $this->load->view('Theme/Menu');
        if ($id == null) {
            $this->load->view('Item/FormCreate');
        } else {
            $data['item'] = $this->MItem->getById($id);
            $this->load->view('Item/FormEdit', $data);
        }
        $this->load->view('Theme/Footer');
        $this->load->view('Theme/Scripts');
    }

    public function create()
    {
        $query = $this->MItem->create();

        if ($query) {
            $this->session->set_flashdata('success', 'Berhasil menambah data item');
            redirect('item');
        } else {
            $this->session->set_flashdata('failed', 'Gagal menambah data item');
            redirect('item');
        }
    }

    public function update($id)
    {
        $query = $this->MItem->update($id);

        if ($query) {
            $this->session->set_flashdata('success', 'Berhasil mengubah data item');
            redirect('item');
        } else {
            $this->session->set_flashdata('failed', 'Gagal mengubah data item');
            redirect('item');
        }
    }

    public function delete($id)
    {
        $query = $this->MItem->destroy($id);

        if ($query) {
            $this->session->set_flashdata('success', 'Berhasil menghapus data item');
            redirect('item');
        } else {
            $this->session->set_flashdata('failed', 'Gagal menghapus data item');
            redirect('item');
        }
    }
}
