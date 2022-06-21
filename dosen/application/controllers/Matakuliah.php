<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	// untuk menmapilakn sluruh data
	public function index()
	{
		//load model & bikin objek
        $this->load->model('matakuliah_model', 'matkul1');

        $this->matkul1->nama = 'Pemrograman Web';
        $this->matkul1->sks = 3;
        $this->matkul1->kode = 312;

        //load model & bikin objek
        $this->load->model('matakuliah_model', 'matkul2');
        $this->matkul2->nama = 'Bahasa Inggris';
        $this->matkul2->sks = 2;
        $this->matkul2->kode = 123;

        //load model & bikin objek
        $this->load->model('matakuliah_model', 'matkul3');
        $this->matkul3->nama = 'PKN';
        $this->matkul3->sks = 2;
        $this->matkul3->kode = 235;

        //load model & bikin objek
        $this->load->model('matakuliah_model', 'matkul4');
        $this->matkul4->nama = 'Basis data';
        $this->matkul4->sks = 4;
        $this->matkul4->kode = 657;
    
        // simpan data ke array
        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4];

        //siapkan data untuk dikirm ke array
        $data["list_matkul"] = $list_matkul;

        //untuk mengirim data & menampilkan ke view
        $this->load->view('header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('footer');
	}
}
