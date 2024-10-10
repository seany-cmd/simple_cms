<?php 


require "parts/header.php"; ?>
    
<div class="container mx-auto my-5" style="max-width: 700px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Add New Comment</h1>
      </div>
      <div class="card mb-2 p-4">
        <form method="POST" action="/comment/add">
          <div class="mb-3">
            <label for="post-content" class="form-label">Name</label>
            <textarea
              class="form-control"
              id="post-content"
              name="name">
            </textarea> 
          </div>
          <div class="mb-3">
            <label for="post-content" class="form-label">Comment</label>
            <textarea
              class="form-control"
              id="post-content"
              rows="10"
              name="comment"
            ></textarea>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
          </form>
      </div>
      <div class="text-center">
        <a href="manage-comment" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i>Back to Manage Comment</a>
      </div>
    <?php require 'parts/footer.php';
