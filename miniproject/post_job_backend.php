<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "user_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$title = $_POST['job_title'];
$description = $_POST['description'];
$category = $_POST['category'];
$skills = $_POST['skills'];
$budget = $_POST['budget'];
$deadline = $_POST['deadline'];

// Handle file upload
$fileName = "";
if (isset($_FILES['job_file']) && $_FILES['job_file']['error'] === 0) {
    $fileTmp = $_FILES['job_file']['tmp_name'];
    $fileName = basename($_FILES['job_file']['name']);
    $targetDir = "uploads/";
    $targetPath = $targetDir . $fileName;

    // Create the uploads directory if it doesn't exist
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    if (!move_uploaded_file($fileTmp, $targetPath)) {
        echo "<script>alert('File upload failed.');</script>";
        $fileName = ""; // fallback
    }
}

// Insert into DB
$sql = "INSERT INTO jobs (title, description, category, skills, budget, deadline, file_name)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssiss", $title, $description, $category, $skills, $budget, $deadline, $fileName);

if ($stmt->execute()) {
    echo "<script>alert('Job posted successfully!'); window.location.href='home.php';</script>";
} else {
    echo "<script>alert('Error: " . $stmt->error . "');</script>";
}

$stmt->close();
$conn->close();
?>
