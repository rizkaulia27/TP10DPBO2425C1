<?php
require_once "config/Database.php";

class Peminjaman{
    private $conn;
    private $table = "peminjaman";

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //Ambil semua data peminjaman
    public function getAll(){
        $query = "
            SELECT p.*, a.nama_anggota, b.judul 
            FROM " . $this->table . " p
            JOIN anggota a ON p.anggota = a.id_anggota
            JOIN buku b ON p.buku = b.id_buku
            ORDER BY p.id_peminjaman DESC
        ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Ambil peminjaman berdasarkan ID
    public function getById($id_peminjaman){
        $query = "
            SELECT p.*, a.nama_anggota, b.judul
            FROM " . $this->table . " p
            JOIN anggota a ON p.anggota = a.id_anggota
            JOIN buku b ON p.buku = b.id_buku
            WHERE p.id_peminjaman = :id_peminjaman
        ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_peminjaman', $id_peminjaman);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Tambah peminjaman
    public function create($anggota, $buku, $tanggal_pengembalian){
        $query = "
            INSERT INTO " . $this->table . " (anggota, buku, tanggal_pengembalian)
            VALUES (:anggota, :buku, :tanggal_pengembalian)
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':anggota', $anggota);
        $stmt->bindParam(':buku', $buku);
        $stmt->bindParam(':tanggal_pengembalian', $tanggal_pengembalian);

        return $stmt->execute();
    }

    //Update peminjaman
    public function update($id_peminjaman, $anggota, $buku, $tanggal_pengembalian){
        $query = "
            UPDATE " . $this->table . "
            SET anggota = :anggota,
                buku = :buku,
                tanggal_pengembalian = :tanggal_pengembalian
            WHERE id_peminjaman = :id_peminjaman
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_peminjaman', $id_peminjaman);
        $stmt->bindParam(':anggota', $anggota);
        $stmt->bindParam(':buku', $buku);
        $stmt->bindParam(':tanggal_pengembalian', $tanggal_pengembalian);

        return $stmt->execute();
    }

    //Hapus peminjaman
    public function delete($id_peminjaman){
        $query = "DELETE FROM " . $this->table . "
                  WHERE id_peminjaman = :id_peminjaman";
                  
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_peminjaman', $id_peminjaman);

        return $stmt->execute();
    }
}
