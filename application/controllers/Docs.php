<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Docs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MSection');
        $this->load->model('MItem');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['sections'] = $this->MSection->getSortByNumber();
        $this->load->view('Theme/Header', $data);
        $this->load->view('Theme/Menu');
        $this->load->view('Docs/Index');
        $this->load->view('Theme/Footer');
        $this->load->view('Theme/Scripts');
    }
}
