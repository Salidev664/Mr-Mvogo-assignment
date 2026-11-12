<?php
require 'model/modeller.php';

class Telma {
    private $connectModel;

    public function __construct() {
        $this->connectModel = new Fadila();
    }

    public function telmaManager() {
        $action = isset($_GET["act"]) ? $_GET["act"] : null;

        switch ($action) {
            case 'register':
                if (isset($_POST["register"])) {
                    $username = $_POST['username'] ?? '';
                    $password = $_POST['password'] ?? '';
                    $contact  = $_POST['contact'] ?? '';
                    $course   = $_POST['course'] ?? '';

                    $this->connectModel->insertStudent($username, $password, $contact, $course);
                    header("Location: ?page=list");
                    exit();
                }
                break;

            case 'update':
                if (isset($_POST["update"])) {
                    $student_id = $_POST['student_id'] ?? '';
                    $username   = $_POST['username'] ?? '';
                    $contact    = $_POST['contact'] ?? '';
                    $course     = $_POST['course'] ?? '';

                    $this->connectModel->updateStudent($username, $contact, $course, $student_id);
                    header("Location: ?page=list");
                    exit();
                }
                break;

            case 'delete':
                $id = $_POST['id'] ?? $_GET['id'] ?? null;
                if ($id !== null && $id !== '') {
                    $this->connectModel->deleteStudent($id);
                    header("Location: ?page=list");
                    exit();
                }
                break;
        }

        $see = isset($_GET["page"]) ? $_GET["page"] : 'list';
        switch ($see) {
            case 'register':
            case 'delete':
                $this->display($see);
                break;

            default:
                $this->display('list');
                break;
        }
    }

    public function display($play = 'list') {
        if ($play !== 'list') {
            include 'view/main/' . $play . '.php';
        } else {
            $vale = $this->connectModel->listThemAll();
            include 'view/main/list.php';
        }
    }
}
?>
