<?php
require_once 'models/Pengembalian.php';
require_once 'models/Peminjaman.php';

class PengembalianViewModel{
    private $pengembalian;
    private $peminjaman;

    public function __construct() {
        //Inisialisasi model Pengembalian dan Peminjaman
        $this->pengembalian = new Pengembalian();
        $this->peminjaman = new Peminjaman();
    }

    //Mengambil semua data pengembalian
    public function getPengembalianList(){
        return $this->pengembalian->getAll();
    }

    //Mengambil semua data peminjaman karena ada foreign key
    public function getPeminjamanList(){
        return $this->peminjaman->getAll();
    }

    //Mengambil data pengembalian berdasarkan ID
    public function getPengembalianById($id_pengembalian){
        return $this->pengembalian->getById($id_pengembalian);
    }

    //Menambah data pengembalian baru
    public function addPengembalian($id_peminjaman){
        //Tanggal_pengembalian tidak perlu dikirim, karena sudah DEFAULT current_timestamp
        return $this->pengembalian->create($id_peminjaman);
    }

    //Update data pengembalian berdasarkan ID
    public function updatePengembalian($id_pengembalian, $id_peminjaman){
        //Kalau tanggal pengembalian tidak diubah, cukup kirim id_peminjaman saja
        return $this->pengembalian->update($id_pengembalian, $id_peminjaman);
    }

    //Menghapus data pengembalian berdasarkan ID
    public function deletePengembalian($id_pengembalian) {
        return $this->pengembalian->delete($id_pengembalian);
    }
}
