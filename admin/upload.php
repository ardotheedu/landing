<?php
// Connect to the database (Assuming you have a valid database connection)
include("conexao.php");

// Validate and handle the file upload
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profilePic"])) {
    $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
    $maxSize = 10 * 1024 * 1024; // 10MB

    $file = $_FILES["profilePic"];
    $filename = $file["name"];
    $filetype = $file["type"];
    $filesize = $file["size"];
    $filetmp = $file["tmp_name"];

    // Validate file extension
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if (!in_array($extension, $allowedExtensions)) {
        die("Error: Invalid file extension. Please choose a JPG, JPEG, PNG, or GIF file.");
    }

    // Validate file size
    if ($filesize > $maxSize) {
        die("Error: File size exceeds the limit of 10MB.");
    }

    // Move the uploaded file to the desired directory
    $uploadDir = "profile_pics/";
    $targetPath = $uploadDir . $filename;
    if (move_uploaded_file($filetmp, $targetPath)) {
        // Insert the file information into the database
        $sql = "INSERT INTO images (filename, filetype, filesize, filepath) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        // Bind the parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "ssis", $filename, $filetype, $filesize, $targetPath);
        mysqli_stmt_execute($stmt);

        // Close the statement
        mysqli_stmt_close($stmt);

        session_start();
        $_SESSION["profilePicPath"] = $targetPath;

        echo "Profile picture uploaded successfully.";
    } else {
        echo "Error uploading the profile picture.";
    }
}
?>