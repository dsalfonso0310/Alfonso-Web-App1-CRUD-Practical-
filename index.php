<?php
require_once 'includes/db.php';
require_once 'includes/function.php';


$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'add':
    case 'edit':
        $student = [];
        if (isset($_GET['id'])) {
            $student = getStudent($conn, $_GET['id']);
        }
        require 'templates/form.php';
        break;
    case 'save':
        saveStudent($conn);
        $_SESSION['message'] = 'Student ' . (isset($_POST['id']) ? 'updated' : 'added') . ' successfully';
        header('Location: index.php');
        break;
    case 'delete':
        deleteStudent($conn, $_GET['id']);
        $_SESSION['message'] = 'Student deleted successfully';
        header('Location: index.php');
        break;
    default:
        $students = getAllStudents($conn);
        require 'templates/list.php';
}
require_once 'includes/footer.php';
?>
