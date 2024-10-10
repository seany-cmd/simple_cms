<?php

    $database = connectToDB();

    // 2. get all the data from the form using $_POST
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    if ( empty( $name ) || empty( $comment ) ) {
        setError( "All the fields are required.", '/manage-comment-add' );
    }

    $sql = "INSERT INTO comment (`name`,`comment`) VALUES (:name, :comment)";
    // prepare (put everything into the bowl)
    $query = $database->prepare( $sql );
    // execute (cook it)
    $query->execute([
        'name' => $name, 
        'comment' => $comment,    
    ]);
    header("Location: /manage-comment");
    exit;