<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kadinkes extends CI_Controller {

  public $judul = "SISTEM INFORMASI EKSEKUTIF PENYAKIT MENULAR KOTA BANDUNG BERBASIS CLOUD";

	function __construct() {
		parent::__construct();
    $this->load->model('perizinan_model');
    $this->load->helper('date_helper');
    $this->load->model('puskesmas_model');
	}

  public function beranda(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'kadinkes/beranda');
			$data['title'] = $this->judul;
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function data_per_kecamatan(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'kadinkes/data_per_kecamatan');
			$data['title'] = $this->judul;
      $data['admin'] = $this->puskesmas_model->get_data_per_kecamatan();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function grafik_data_dbd(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'kadinkes/grafik_data_dbd');
      $data['title'] = $this->judul;
      $data['admin'] = $this->puskesmas_model->get_data_per_kecamatan();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function grafik_data_umur(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'kadinkes/grafik_data_umur');
      $data['title'] = $this->judul;
      $data['admin'] = $this->puskesmas_model->get_data_per_kecamatan();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function grafik_data_per_kecamatan(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'kadinkes/grafik_data_per_kecamatan');
			$data['title'] = $this->judul;
      $data['admin'] = $this->puskesmas_model->get_data_per_kecamatan();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function lihat_klinik(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'kadinkes/lihat_klinik');
			$data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function lihat_klinik_takberizin(){
		if ($this->session->userdata('username')) {
			$data = array('isi' => 'kadinkes/lihat_klinik_takberizin');
			$data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar_takberizin();
			$this->load->view('templates/themes', $data);
		}
		else{
			redirect('login');
		}
	}

  public function lihat_klinik_tervalidasi(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'kadinkes/lihat_klinik_tervalidasi');
      $data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function klinik_sesuai_standart(){
    if ($this->session->userdata('username')) {
      $data = array('isi' => 'kadinkes/klinik_sesuai_standart');
      $data['title'] = $this->judul;
      $data['admin'] = $this->perizinan_model->get_data_dasar_tervalidasi();
      $this->load->view('templates/themes', $data);
    }
    else{
      redirect('login');
    }
  }

  public function klinik_sesuai_standart_excel(){
		if ($this->session->userdata('username')) {
      $data['excel'] = $this->perizinan_model->get_data_dasar();
      $this->load->view('kadinkes/standart_excel',$data);
		}
		else{
			redirect('login');
		}
	}


}
