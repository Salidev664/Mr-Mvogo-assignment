<?php
require 'db.php';

class Fadila {
    private $connectDb;

    public function __construct() {
        $this->connectDb = new Bd();
    }

    public function listThemAll() {
        $sql = "SELECT * FROM student ORDER BY id DESC";
        $request = $this->connectDb->conn->prepare($sql);
        $request->execute();
        return $request->fetchAll();
    }

    public function insertStudent($username, $password, $contact, $course) {
        $sql = "INSERT INTO student (name, password, contact, course) VALUES (?, ?, ?, ?)";
        $request = $this->connectDb->conn->prepare($sql);
        return $request->execute([$username, $password, $contact, $course]);
    }

   public function updateStudent($username, $contact, $course, $id) {
    $sql = "UPDATE student SET name = ?, contact = ?, course = ? WHERE id = ?";
    $request = $this->connectDb->conn->prepare($sql);
    return $request->execute([$username, $contact, $course, $id]);
   }


    public function deleteStudent($id) {
        $sql = "DELETE FROM student WHERE id = ?";
        $request = $this->connectDb->conn->prepare($sql);
        return $request->execute([$id]);
    }
}
?>
