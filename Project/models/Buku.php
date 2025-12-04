<?php
require_once "config/Database.php";

class Buku{
    private $conn;
    private $table = "buku";

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //Ambil semua buku
    public function getAll(){
        $query = "
            SELECT b.*, p.nama_penulis 
            FROM " . $this->table . " b
            LEFT JOIN penulis p ON b.penulis = p.id_penulis
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Ambil buku berdasarkan id_buku
    public function getById($id_buku){
        $query = "
            SELECT b.*, p.nama_penulis
            FROM " . $this->table . " b
            LEFT JOIN penulis p ON b.penulis = p.id_penulis
            WHERE b.id_buku = :id_buku
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Tambah buku
    public function create($judul, $penulis, $tahun_terbit, $stok){
        $query = "
            INSERT INTO " . $this->table . "
            (judul, penulis, tahun_terbit, stok)
            VALUES (:judul, :penulis, :tahun_terbit, :stok)
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':penulis', $penulis);
        $stmt->bindParam(':tahun_terbit', $tahun_terbit);
        $stmt->bindParam(':stok', $stok);

        return $stmt->execute();
    }

    //Update buku
    public function update($id_buku, $judul, $penulis, $tahun_terbit, $stok){
        $query = "
            UPDATE " . $this->table . "
            SET judul = :judul,
                penulis = :penulis,
                tahun_terbit = :tahun_terbit,
                stok = :stok
            WHERE id_buku = :id_buku
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku);
        $stmt->bindParam(':judul', $judul);
        $stmt->bindParam(':penulis', $penulis);
        $stmt->bindParam(':tahun_terbit', $tahun_terbit);
        $stmt->bindParam(':stok', $stok);

        return $stmt->execute();
    }

    //Hapus buku
    public function delete($id_buku){
        $query = "DELETE FROM " . $this->table . " WHERE id_buku = :id_buku";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_buku', $id_buku);
        return $stmt->execute();
    }
}
