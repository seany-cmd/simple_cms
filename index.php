<?php 

    // start a session
    session_start();

    // require the functions
    require 'includes/functions.php';

    // routing
    // get the current path the user is on
    $path = $_SERVER["REQUEST_URI"];

    // determine what to do based on the user action
    switch( $path ) {
        // actions
        case '/auth/signup':
            require 'includes/auth/signup.php';
            break;
        case '/auth/login':
            require 'includes/auth/login.php';
            break;
        case '/user/add':
            require 'includes/user/add.php';
            break;
        // 3. setup the action route for delete user
        case '/user/delete':
            require 'includes/user/delete.php';
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

        // defaults to home if path cannot be found
        default:
            require 'pages/home.php';
            break;
    }