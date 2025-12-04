<?php
require_once 'models/Buku.php';
require_once 'models/Penulis.php';

class BukuViewModel{
    private $buku;
    private $penulis;

    public function __construct(){
        //Inisialisasi model Buku dan Penulis
        $this->buku = new Buku();
        $this->penulis = new Penulis();
    }

    //Mengambil semua buku
    public function getBukuList(){
        return $this->buku->getAll();
    }

    //Mengambil semua penulis karena ada foreign key
    public function getPenulisList(){
        return $this->penulis->getAll();
    }

    //Mengambil buku berdasarkan ID
    public function getBukuById($id_buku){
        return $this->buku->getById($id_buku);
    }

    //Menambah buku baru
    public function addBuku($judul, $penulis, $tahun_terbit, $stok){
        return $this->buku->create($judul, $penulis, $tahun_terbit, $stok);
    }

    //Update buku berdasarkan ID
    public function updateBuku($id_buku, $judul, $penulis, $tahun_terbit, $stok){
        return $this->buku->update($id_buku, $judul, $penulis, $tahun_terbit, $stok);
    }

    //Menghapus buku berdasarkan ID
    public function deleteBuku($id_buku){
        return $this->buku->delete($id_buku);
    }
}
