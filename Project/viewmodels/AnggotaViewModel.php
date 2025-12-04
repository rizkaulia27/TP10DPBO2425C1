<?php
require_once 'models/Anggota.php';

class AnggotaViewModel{
    private $anggota;

    public function __construct(){
        //Inisialisasi model Anggota
        $this->anggota = new Anggota();
    }

    //Mengambil semua anggota
    public function getAnggotaList(){
        return $this->anggota->getAll();
    }

    //Mengambil anggota berdasarkan ID
    public function getAnggotaById($id_anggota){
        return $this->anggota->getById($id_anggota);
    }

    //Menambah anggota baru
    public function addAnggota($nama_anggota, $email, $alamat){
        return $this->anggota->create($nama_anggota, $email, $alamat);
    }

    //Update anggota berdasarkan ID
    public function updateAnggota($id_anggota, $nama_anggota, $email, $alamat){
        return $this->anggota->update($id_anggota, $nama_anggota, $email, $alamat);
    }

    //Menghapus anggota berdasarkan ID
    public function deleteAnggota($id_anggota){
        return $this->anggota->delete($id_anggota);
    }
}
