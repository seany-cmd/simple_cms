<?php 

  // check if whoever that viewing this page is logged in.
  checkIfuserIsNotLoggedIn();

require "parts/header.php"; ?>
<div class="container mx-auto my-5" style="max-width: 700px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Add New Book</h1>
      </div>
      <div class="card mb-2 p-4">
        <form method="POST" action="/post/add">
          <div class="mb-3">
            <label for="post-title" class="form-label">Name</label>
            <input type="text" class="form-control" id="post-title" name="title" />
          </div>
          <div class="mb-3">
            <label for="post-title" class="form-label">Book</label>
            <input type="text" class="form-control" id="post-title" name="title" />
          </div>
          <div class="mb-3">
            <label for="post-content" class="form-label">Title</label>
            <textarea
              class="form-control"
              id="post-content"
              rows="10"
              name="content"
            ></textarea>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
      <div class="text-center">
        <a href="/manage-category" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i>Back to Book Category</a
        >
      </div>
    </div>
    <?php require 'parts/footer.php';


