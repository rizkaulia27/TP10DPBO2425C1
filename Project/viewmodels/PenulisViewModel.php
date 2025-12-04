<?php
require_once 'models/Penulis.php';

class PenulisViewModel{
    private $penulis;

    public function __construct(){
        //Inisialisasi model penulis
        $this->penulis = new Penulis();
    }

    //Mengambil data penulis dari model
    public function getPenulisList(){
        return $this->penulis->getAll();
    }

    //Mengambil data penulis berdasarkan ID
    public function getPenulisById($id_penulis){
        return $this->penulis->getById($id_penulis);
    }   

    //Menambah penulis baru
    public function addPenulis($nama_penulis, $bio){
        return $this->penulis->create($nama_penulis, $bio);
    }

    //Update data penulis berdasarkan ID
    public function updatePenulis($id_penulis, $nama_penulis, $bio){
        return $this->penulis->update($id_penulis, $nama_penulis, $bio);
    }

    //Menghapus penulis berdasarkan ID
    public function deletePenulis($id_penulis){
        return $this->penulis->delete($id_penulis);
    }
}
