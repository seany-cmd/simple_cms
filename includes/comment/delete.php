<?php

    // 1. connect to Database
    $database = connectToDB();

    // 2. get the post_comment from the form
    $post_comment = $_POST["comment"];

    // 3. delete the user
    // 3.1
    $sql = "DELETE FROM posts where comment = :comment";
    // 3.2
    $query = $database->prepare( $sql );
    // 3.3
    $query->execute([
        'comment' => $post_comment
    ]);

    header("Location: /manage-comment");
    exit;