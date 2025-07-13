<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "user_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['job_title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $budget = $_POST['budget'];
    $deadline = $_POST['deadline'];
    $skills = $_POST['skills'];

    // File handling
    $fileName = "";
    if (isset($_FILES['job_file']) && $_FILES['job_file']['error'] === 0) {
        $fileTmp = $_FILES['job_file']['tmp_name'];
        $fileName = basename($_FILES['job_file']['name']);
        $targetDir = "uploads/";
        $targetFilePath = $targetDir . $fileName;

        // Create uploads directory if not exists
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        if (!move_uploaded_file($fileTmp, $targetFilePath)) {
            echo "<script>alert('File upload failed.');</script>";
            $fileName = ""; // optional fallback
        }
    }

    // Insert into DB (include file name)
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Post a Job - Lancer</title>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f7f9fc;
      padding: 40px;
    }
    .post-job-container {
      background-color: white;
      max-width: 700px;
      margin: auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .post-job-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 18px;
    }
    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
    }
    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 15px;
    }
    .form-group textarea {
      resize: vertical;
    }
    .form-group input[type="file"] {
      border: none;
    }
    .submit-btn {
      background-color: #0077ff;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
      transition: background 0.3s ease;
    }
    .submit-btn:hover {
      background-color: #005fd1;
    }
    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-right:20px;
    }
  </style>
</head>
<body>
<nav>
    <a href="home.php"><img src="logo1.png" alt="Lancer Company Logo" class="logo" height="90px" width="150px" /></a>
</nav>
<div class="post-job-container">
  <h2>Post a New Job</h2>
  <form action="post_job_backend.php" method="POST" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="job_title">Job Title</label>
      <input type="text" id="job_title" name="job_title" required />
    </div>

    <div class="form-group">
      <label for="category">Category</label>
      <select name="category" id="category" required>
        <option value="">-- Select Category --</option>
        <option value="Design">Design</option>
        <option value="Web Development">Web Development</option>
        <option value="Marketing">Marketing</option>
        <option value="Writing">Writing</option>
        <option value="Data Science">Data Science</option>
      </select>
    </div>

    <div class="form-group">
      <label for="skills">Required Skills (comma-separated)</label>
      <input type="text" id="skills" name="skills" placeholder="e.g., HTML, CSS, React, MySQL" required />
    </div>

    <div class="form-group">
      <label for="description">Job Description</label>
      <textarea id="description" name="description" rows="5" required></textarea>
    </div>

    <div class="form-group">
      <label for="budget">Estimated Budget ($)</label>
      <input type="number" id="budget" name="budget" min="1" required />
    </div>

    <div class="form-group">
      <label for="deadline">Deadline</label>
      <input type="date" id="deadline" name="deadline" required />
    </div>

    <div class="form-group">
      <label for="job_file">Upload File (optional)</label>
      <input type="file" id="job_file" name="job_file" />
    </div>

    <button type="submit" class="submit-btn">Post Job</button>

  </form>
</div>

</body>
</html>
