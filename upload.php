<?php
if (!empty($_FILES)) {
    // Include the database configuration file 
    require 'dbconfig.php';
    
    // File path configuration 
    $uploadDir = "uploads/";
    $fileName = basename($_FILES['file']['name']);
    $uploadFilePath = $uploadDir . $fileName;

    // Upload file to server 
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)) {
        // Insert file information in the database 
        $sql = "INSERT INTO files (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())";
        $insert = $conn->query($sql);

        echo json_encode(array(
            "status" => true,
            "message" => "File uploaded successfully"
        ));
    } else {
        echo json_encode(array(
            "status" => false,
            "message" => "Failed to upload"
        ));
    }
}
