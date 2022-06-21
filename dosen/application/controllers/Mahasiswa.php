<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	// untuk menmapilakn sluruh data
	public function index()
	{
		//load model & bikin objek
        $this->load->model('mahasiswa_model', 'mhs1');

        $this->mhs1->id = 1;
        $this->mhs1->nim = '010001';
        $this->mhs1->nama = 'Faiz Fikri';
        $this->mhs1->gender = 'L';
        $this->mhs1->ipk = 3.85;

        //load model & bikin objek
        $this->load->model('mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '020002';
        $this->mhs2->nama = 'Pandan Wangi';
        $this->mhs2->gender = 'P';
        $this->mhs2->ipk = 3.35;

        //load model & bikin objek
        $this->load->model('mahasiswa_model', 'mhs3');
        $this->mhs3->id = 3;
        $this->mhs3->nim = '030003';
        $this->mhs3->nama = 'Karina kwangie';
        $this->mhs3->gender = 'P';
        $this->mhs3->ipk = 4.00;

        //load model & bikin objek
        $this->load->model('mahasiswa_model', 'mhs4');
        $this->mhs4->id = 4;
        $this->mhs4->nim = '040004';
        $this->mhs4->nama = 'Johnny';
        $this->mhs4->gender = 'L';
        $this->mhs4->ipk = 3.01;

        // simpan data ke array
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3, $this->mhs4];

        //siapkan data untuk dikirm ke array
        $data["list_mhs"] = $list_mhs;

        //untuk mengirim data & menampilkan ke view
        $this->load->view('header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('footer');
	}
}
