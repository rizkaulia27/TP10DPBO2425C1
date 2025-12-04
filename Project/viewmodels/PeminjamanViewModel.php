<?php
require_once 'models/Peminjaman.php';
require_once 'models/Anggota.php';
require_once 'models/Buku.php';

class PeminjamanViewModel{
    private $peminjaman;
    private $anggota;
    private $buku;

    public function __construct(){
        //Inisialisasi model peminjaman, anggota dan buku
        $this->peminjaman = new Peminjaman();
        $this->anggota = new Anggota();
        $this->buku = new Buku();
    }

    //Mengambil semua data peminjaman
    public function getPeminjamanList(){
        return $this->peminjaman->getAll();
    }

    //Mengambil semua data anggota karena ada foreign key
    public function getAnggotaList(){
        return $this->anggota->getAll();
    }
    
    //Mengambil semua data buku karena ada foreign key
    public function getBukuList(){
        return $this->buku->getAll();
    }

    //Mengambil data peminjaman berdasarkan ID
    public function getPeminjamanById($id_peminjaman){
        return $this->peminjaman->getById($id_peminjaman);
    }

    //Menambah data peminjaman baru
    public function addPeminjaman($anggota, $buku, $tanggal_pengembalian){
        return $this->peminjaman->create($anggota, $buku, $tanggal_pengembalian);
    }

    //Update peminjaman berdasarkan ID
    public function updatePeminjaman($id_peminjaman, $anggota, $buku, $tanggal_pengembalian){
        return $this->peminjaman->update($id_peminjaman, $anggota, $buku, $tanggal_pengembalian);
    }

    //Menghapus peminjaman berdasarkan ID
    public function deletePeminjaman($id_peminjaman){
        return $this->peminjaman->delete($id_peminjaman);
    }
}
