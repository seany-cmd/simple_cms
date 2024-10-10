<?php

    // 1. connect to database
    $database = connectToDB();

    // 2. get all the data from the form using $_POST
    $category = $_POST['category'];
    
    // 3. do error checking - make sure all the fields are not empty
    if ( empty( $category)  ) {
        setError( "Please fill in anything.", '/manage-category ?id=' . $id );
    }

    // 4. update the post data
    // 4.1
    $sql = "UPDATE posts SET title = :title, content = :content, status = :status WHERE id = :id";
    // 4.2
    $query = $database->prepare( $sql );
    // 4.3
    $query->execute([
        'category' => $category,
        
    ]);
 
    header("Location: /manage-category");
    exit;