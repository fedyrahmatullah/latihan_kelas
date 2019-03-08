<?php 

class Form_kelas extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Form_kelas_model','modelform');
	}
	
	public function form_kelas(){
		$this->load->view('form_isidata/Form_kelas');
	}
	
	public function insertData(){
		$data = array(
			'username'=> $this->input->post('username'),
			'password'=> $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'hobi' => $this->input->post('hobi'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'deskripsi' => $this->input->post('deskripsi')
		);
		
		if (!empty($data['username']) && !empty($data['password']) && !empty($data['nama']) && !empty($data['hobi']) && !empty($data['alamat']) && !empty($data['email']) && !empty($data['deskripsi'])){
			$inserkan = $this->modelform->insertData($data);
			
			if ($inserkan){
				$this->session->set_flashdata('kunci','success');
				$this->session->set_flashdata('pesan','bahhaa insertnya sukses bangsatt');
				redirect(site_url('form_kelas'));
			} else{
				$this->session->set_flashdata('kunci','danger');
				$this->session->set_flashdata('pesan','gagal insert an loe bangsatt bahaha');
				redirect(site_url('form_kelas'));
			}
		} else {
			$this->session->set_flashdata('kunci','warning');
			$this->session->set_flashdata('pesan','oops isi semua ya bangsattt fieldnya bahaha');
			redirect(site_url('form_kelas'));
		}
	}

} 