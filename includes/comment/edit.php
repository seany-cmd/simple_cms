<?php

    // 1. connect to database
    $database = connectToDB();

    // 2. get all the data from the form using $_POST
    $comment = $_POST['comment'];
    
    // 3. do error checking - make sure all the fields are not empty
    if ( empty( $comment)  ) {  setError( "Please fill in anything.", '/manage-comment ?id=' . $id );
    }  

    // 4. update the post data
    // 4.1
    $sql = "UPDATE posts SET comment = :comment, content = :content, status = :status WHERE comment = :comment";
    // 4.2
    $query = $database->prepare( $sql );
    // 4.3
    $query->execute([
        'comment' => $comment,     
    ]);
    header("Location:/manage-comment");
    exit;