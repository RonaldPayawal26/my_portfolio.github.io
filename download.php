<?php
// Get the file name from the query parameter
// $file_name = isset($_GET['file']) ? $_GET['file'] : '';

// Define the file path 
$file_path = 'assets/MyCV.pdf';

// Check if the file exists
if (file_exists($file_path)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
    header('Content-Length: ' . filesize($file_path));

    // Read the file and output it to the browser
    readfile($file_path);
    exit;
} else {
    echo "File not found.";
}
?>




