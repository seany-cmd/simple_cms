<?php

    // 1. connect to Database
    $database = connectToDB();

    // 2. get the post_category from the form
    $post_category = $_POST["category"];

    // 3. delete the user
    // 3.1
    $sql = "DELETE FROM posts where category = :category";
    // 3.2
    $query = $database->prepare( $sql );
    // 3.3
    $query->execute([
        'category' => $post_category
    ]);
    header("Location:/manage-category");
    exit;