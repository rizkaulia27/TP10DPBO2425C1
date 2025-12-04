<?php
require_once "config/Database.php";

class Penulis{
    private $conn;
    private $table = "penulis";

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //Ambil semua data penulis
    public function getAll(){
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Ambil data penulis berdasarkan id_penulis
    public function getById($id_penulis){
        $query = "SELECT * FROM " . $this->table . " WHERE id_penulis = :id_penulis";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_penulis', $id_penulis);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Tambah penulis
    public function create($nama_penulis, $bio){
        $query = "INSERT INTO " . $this->table . " (nama_penulis, bio) 
                  VALUES (:nama_penulis, :bio)";
        $stmt = $this->conn->prepare($query);
        //Bind parameters
        $stmt->bindParam(':nama_penulis', $nama_penulis);
        $stmt->bindParam(':bio', $bio);
        return $stmt->execute();
    }

    //Update penulis
    public function update($id_penulis, $nama_penulis, $bio){
        $query = "UPDATE " . $this->table . "  
                  SET nama_penulis = :nama_penulis, bio = :bio 
                  WHERE id_penulis = :id_penulis";
        $stmt = $this->conn->prepare($query);
        //Bind parameters
        $stmt->bindParam(':id_penulis', $id_penulis);
        $stmt->bindParam(':nama_penulis', $nama_penulis);
        $stmt->bindParam(':bio', $bio);
        return $stmt->execute();
    }

    //Hapus penulis
    public function delete($id_penulis){
        $query = "DELETE FROM " . $this->table . " WHERE id_penulis = :id_penulis";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_penulis', $id_penulis);
        return $stmt->execute();
    }
}
