<?php
require_once "config/Database.php";

class Anggota{
    private $conn;
    private $table = "anggota";

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //Ambil semua anggota
    public function getAll(){
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Ambil anggota berdasarkan id_anggota
    public function getById($id_anggota){
        $query = "SELECT * FROM " . $this->table . " WHERE id_anggota = :id_anggota";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_anggota', $id_anggota);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Tambah anggota
    public function create($nama_anggota, $email, $alamat){
        $query = "
            INSERT INTO " . $this->table . " (nama_anggota, email, alamat)
            VALUES (:nama_anggota, :email, :alamat)
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_anggota', $nama_anggota);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':alamat', $alamat);

        return $stmt->execute();
    }

    //Update anggota
    public function update($id_anggota, $nama_anggota, $email, $alamat){
        $query = "
            UPDATE " . $this->table . "
            SET nama_anggota = :nama_anggota,
                email = :email,
                alamat = :alamat
            WHERE id_anggota = :id_anggota
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_anggota', $id_anggota);
        $stmt->bindParam(':nama_anggota', $nama_anggota);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':alamat', $alamat);

        return $stmt->execute();
    }

    //Hapus anggota
    public function delete($id_anggota){
        $query = "DELETE FROM " . $this->table . " WHERE id_anggota = :id_anggota";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_anggota', $id_anggota);
        return $stmt->execute();
    }
}
