<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinput extends CI_Controller {
    public function __construct()
    {
    parent ::__construct();
    $this->load->model('Rmodel');
    }
	public function index()
	{
        $this->form_validation->set_rules('nama', 'Nama pembeli',
        'required', [
            'required' =>'Nama pembeli harus diisi'
        ]);
        $this->form_validation->set_rules('nhp', 'Nomor HP',
        'required', [
            'required' =>'Nomer hp harus diisi'
        ]);
        if ($this->form_validation->run()==false){
        $data['merk'] = ['Nike','Adidas','Kickers','Eiger','bucherri'];
        		$this->load->view('v_input', $data);
	    } else {
        $data = [
            'nama' => $this->input->post('nama'),
            'nhp' => $this->input->post('nhp'),
            'merk' => $this->input->post('merk'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->Rmodel->proses($this->input->post('merk'))
        ];
        $this->load->view('v_output', $data);
    }
}
}

