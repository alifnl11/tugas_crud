<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['hasil'] = $this->model_crud->getUser('data_user');
		$this->load->view('welcome_message', $this->data);
	}
	public function form_input(){
		$this->load->view('form-input');
	}
	public function insert(){
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$fakultas = $_POST['fakultas'];
		$jurusan = $_POST['jurusan'];
		$data = array('nama_lengkap' => $nama, 'nim' => $nim, 'fakultas' => $fakultas, 'jurusan' => $jurusan);
		$tambah = $this->model_crud->tambahData('data_user',$data);
		if($tambah > 0){
			redirect('welcome/index');
		}
		else{
			echo 'Gagal disimpan';
		}
	}

	public function delete($id){
		$hapus = $this->model_crud->hapusData('data_user',$id);
		if($hapus > 0){
			redirect('welcome/index');
		}else{
			echo 'Gagal hapus';
		}
	}
	public function form_edit($id){
		$this->data['dataEdit'] = $this->model_crud->dataEdit('data_user',$id);
		$this->load->view('form-edit', $this->data);
	}
	public function update($id){
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$fakultas = $_POST['fakultas'];
		$jurusan = $_POST['jurusan'];
		$data = array('nama_lengkap' => $nama, 'nim' => $nim, 'fakultas' => $fakultas, 'jurusan' => $jurusan);
		$edit = $this->model_crud->editData('data_user',$data,$id);
		if($edit > 0){
			redirect('welcome/index');
		}
		else{
			echo 'Gagal edit';
		}
	}
}