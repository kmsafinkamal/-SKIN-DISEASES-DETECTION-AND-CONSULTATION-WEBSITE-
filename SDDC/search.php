<?php
if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];
    
    // Construct the potential redirect URL
    $redirectURL = "{$searchQuery}.php";

    // Check if the file exists
    if (file_exists($redirectURL)) {
        // Redirect to the appropriate page
        header("Location: {$redirectURL}");
        exit;
    } else {
        // Handle gracefully if the file doesn't exist
        header("Location: main.php");
    }
}
?>
