<?php 
  // check if whoever that viewing this page is logged in.
  // if not logged in, you want to redirect back to login page
  checkIfuserIsNotLoggedIn();

require "parts/header.php"; ?>
<div class="container mx-auto my-5" style="max-width: 800px;">
      <h1 class="h1 mb-4 text-center ">Dashboard</h1>
      <?php require "parts/success_message.php"; ?>
      <div class="row">
        <div class="col">
          <div class="card mb-2">
            <div class="card-body">
              <h5 class="card-title text-center">
                <div class="mb-1">
                  <i class="bi bi-pencil-square" style="font-size: 3rem;"></i>
                </div>
                Manage Posts
              </h5>
              <div class="text-center mt-3">
                <a href="/manage-posts" class="btn btn-warning btn-sm"
                  >Access</a
                >
                <div class="mb-1">
                <i class="bi bi-people" style="font-size: 3rem;"></i>
                </div>
                Manage User
              </h5>
              <div class="text-center mt-3">
                <a href="/manage-users" class="btn btn-danger btn-sm"
                  >Access</a
                >
                <div class="mb-1">
                <i class="bi bi-book" style="font-size: 3rem;" ></i>
                </div>
                Manage Book Category 
              </h5>
              <div class="text-center mt-3">
                <a href="/manage-category" class="btn btn-success btn-sm"
                  >Access</a
                >
                <div class="mb-1">
                <i class="bi bi-chat-dots-fill" style="font-size: 3rem;" ></i>
                </div>
                Manage Comment
              </h5>
              <div class="text-center mt-3">
                <a href="/manage-comment" class="btn btn-primary btn-sm"
                  >Access</a
                >
              </div>
            </div>
          </div>
        </div>
       
              </div>
            </div>
          </div>
        </div>
     
      </div>
      <div class="mt-4 text-center">
        <a href="/" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i>Back</a
        >
      </div>
    </div>
    <?php require 'parts/footer.php';