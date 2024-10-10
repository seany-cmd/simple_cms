<?php

    $database = connectToDB();

    // 2. get all the data from the form using $_POST
    $category = $_POST['category'];
    

    if ( empty( $category ) ) {
        setError( "All the fields are required.", '/manage-category-add' );
    }

    $sql = "INSERT INTO posts (`category`) VALUES (:category)";
    // prepare (put everything into the bowl)
    $query = $database->prepare( $sql );
    // execute (cook it)
    $query->execute([
        'category' => $category,
        
    ]);
    
   
    header("Location: /manage-category");
    exit;