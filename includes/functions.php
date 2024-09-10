<?php

// connect to database
function connectToDB() {
    // Step 1: list out all the database info
     $host = "127.0.0.1";
     $database_name = "simple_cms";
     $database_user = "root";
     $database_password = "";
  
     // Step 2: connect to the database
     $database = new PDO(
      "mysql:host=$host;dbname=$database_name",
      $database_user,
      $database_password
    );
    
    
    return $database;
}

// set error message
function setError( $error_message, $redirect_page ) {
    $_SESSION["error"] = $error_message;
    // redirect back to login page
    header("Location: " . $redirect_page );
    exit;
}