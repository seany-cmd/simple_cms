<?php 

    // start a session
    session_start();

    // require the functions
    require 'includes/functions.php';

    // routing
    // get the current path the user is on
    $path = $_SERVER["REQUEST_URI"];
    // remove all the query string from the URL
    $path = parse_url( $path, PHP_URL_PATH );

    // determine what to do based on the user action
    switch( $path ) {
        // actions
        case '/auth/signup':
            require 'includes/auth/signup.php';
            break;
        case '/auth/login':
            require 'includes/auth/login.php';
            break;
        case '/comment/add':
            require 'includes/comment/add.php';
            break;
        case '/comment/delete':
            require 'includes/comment/delete.php';
             break;
        case '/comment/edit':
            require 'includes/comment/edit.php';
            break;
            case '/category/add':
            require 'includes/category/add.php';
            break;
        case '/category/delete':
            require 'includes/category/delete.php';
            break; 
        case '/category/edit':
            require 'includes/category/edit.php';
            break;
        // setup the action route for delete user
        case '/user/delete':
            require 'includes/user/delete.php';
            break;
        // Setup the action route for edit user
        case '/user/edit':
            require 'includes/user/edit.php';
            break;
        // setup the action route for change password
        case '/user/changepwd':
            require 'includes/user/changepwd.php';
            break;
        case '/post/add':
            require 'includes/post/add.php';
            break;
        // setup the action route for delete post
        case '/post/delete':
            require 'includes/post/delete.php';
            break;
        // Setup the action route for edit post
        case '/post/edit':
            require 'includes/post/edit.php';
            break;
        
            
        // pages
        case '/dashboard':
            require 'pages/dashboard.php';
            break;
        case '/logout':
            require 'pages/logout.php';
            break;
        case '/login':
            require 'pages/login.php';
            break;
        case '/manage-posts-add':
            require 'pages/manage-posts-add.php';
            break;
        case '/manage-posts-edit':
            require 'pages/manage-posts-edit.php';
            break;
        case '/manage-posts':
            require 'pages/manage-posts.php';
            break;
        case '/manage-users-add':
            require 'pages/manage-users-add.php';
            break;
        case '/manage-users-changepwd' :
            require 'pages/manage-users-changepwd.php';
            break;
        case '/manage-users-edit' :
            require 'pages/manage-users-edit.php';
            break;
        case '/manage-users' :
            require 'pages/manage-users.php';
            break;
        case '/post' :
            require 'pages/post.php';
            break;
        case '/signup' :
            require 'pages/signup.php';
            break;
        case '/manage-comment' :
            require 'pages/manage-comment.php';
            break;
        case '/manage-comment-add' :
            require 'pages/manage-comment-add.php';
            break;
        case '/manage-comment-edit' :
            require 'pages/manage-comment-edit.php';
            break;
        case '/manage-category' :
            require 'pages/manage-category.php';
            break;
        case '/manage-category-add' :
            require 'pages/manage-category-add.php';
            break;
        case '/manage-category-edit' :
            require 'pages/manage-category-edit.php';
            break;
        // defaults to home if path cannot be found
        default:
            require 'pages/home.php';
            break;
    }