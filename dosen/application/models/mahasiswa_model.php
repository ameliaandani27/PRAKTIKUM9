<?php

class mahasiswa_model extends CI_Model{
    public $id, $nama, $nik, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    //function
    public function predikat(){
        // kon
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Bagus";
        return $predikat;
    }    
}

?>