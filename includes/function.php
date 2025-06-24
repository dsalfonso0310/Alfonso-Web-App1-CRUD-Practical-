<?php
function getAllStudents($conn) {
    $stmt = $conn->query("SELECT * FROM students");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getStudent($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM students WHERE student_id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function saveStudent($conn) {
    $data = [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'year_level' => $_POST['year_level'],
        'program' => $_POST['program'],
        'email' => $_POST['email']
    ];
    
    if (isset($_POST['id'])) {
        $data['id'] = $_POST['id'];
        $sql = "UPDATE students SET first_name = :first_name, last_name = :last_name, 
                year_level = :year_level, program = :program, email = :email 
                WHERE student_id = :id";
    } else {
        $sql = "INSERT INTO students (first_name, last_name, year_level, program, email) 
                VALUES (:first_name, :last_name, :year_level, :program, :email)";
    }
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function deleteStudent($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM students WHERE student_id = ?");
    $stmt->execute([$id]);
}
?>
