<?php
require_once "config/Database.php";

class Pengembalian{
    private $conn;
    private $table = "pengembalian";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //Ambil semua pengembalian
    public function getAll(){
        $query = "SELECT k.*, p.anggota AS id_anggota, p.buku AS id_buku, a.nama_anggota, b.judul
                  FROM " . $this->table . " k
                  JOIN peminjaman p ON k.id_peminjaman = p.id_peminjaman
                  JOIN anggota a ON p.anggota = a.id_anggota
                  JOIN buku b ON p.buku = b.id_buku
                  ORDER BY k.id_pengembalian DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Ambil pengembalian berdasarkan id
    public function getById($id_pengembalian){
        $query = "SELECT k.*, p.anggota AS id_anggota, p.buku AS id_buku, a.nama_anggota, b.judul
                  FROM " . $this->table . " k
                  JOIN peminjaman p ON k.id_peminjaman = p.id_peminjaman
                  JOIN anggota a ON p.anggota = a.id_anggota
                  JOIN buku b ON p.buku = b.id_buku
                  WHERE k.id_pengembalian = :id_pengembalian";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pengembalian', $id_pengembalian);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Tambah data pengembalian
    public function create($id_peminjaman){
        $query = "INSERT INTO " . $this->table . " (id_peminjaman)
                  VALUES (:id_peminjaman)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_peminjaman', $id_peminjaman);
        return $stmt->execute();
    }

    //Update data pengembalian
    public function update($id_pengembalian, $id_peminjaman){
        $query = "UPDATE " . $this->table . "
                  SET id_peminjaman = :id_peminjaman
                  WHERE id_pengembalian = :id_pengembalian";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pengembalian', $id_pengembalian);
        $stmt->bindParam(':id_peminjaman', $id_peminjaman);

        return $stmt->execute();
    }

    //Hapus data pengembalian
    public function delete($id_pengembalian){
        $query = "DELETE FROM " . $this->table . "
                  WHERE id_pengembalian = :id_pengembalian";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pengembalian', $id_pengembalian);
        return $stmt->execute();
    }
}
