<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('Forminput');
    }
    public function proses()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'tanghir' => $this->input->post('tanghir'),
            'Temhir' => $this->input->post('Temhir'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('Formoutput', $data);
    }
}