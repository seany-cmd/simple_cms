<?php 
// check if user is logged in or not
checkIfuserIsNotLoggedIn();

 
  // 1. connect to the database
  $database = connectToDB();
  
  // 2. get all the users
  // 2.1
  $sql = "SELECT * FROM users";
  // 2.2
  $query = $database->prepare( $sql );
  // 2.3
  $query->execute();
  // 2.4
  $users = $query->fetchAll();
  
  require "parts/header.php"; 
?>
<div class="container mx-auto my-5" style="max-width: 700px;">
      <div class="d-flex justify-content-between align-items-center mb-2">
        <h1 class="h1">Manage Comment</h1>
        <div class="text-end">
          <a href="/manage-comment-add" class="btn btn-primary btn-sm">Add Comment</a>
        </div>
      </div>
      <div class="card mb-2 p-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Comment</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
        </table>
        <tbody>
       
           
            
               
              <td class="text-end">
                <div class="buttons">
                  <a
                    href="/post?id=<?= $post['id']; ?>"
                    class="btn btn-primary btn-sm me-2"
                    ><i class="bi bi-eye"></i
                  ></a>
                  <a
                    href="/manage-comment<?= $post['id']; ?>"
                    class="btn btn-secondary btn-sm me-2"
                    ><i class="bi bi-pencil"></i
                  ></a>
                 <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-post-<?= $post['id']; ?>">
                    <i class="bi bi-trash"></i>
                  </button>
                   </tbody>
                  <!-- Modal -->
                  <div class="modal fade" id="delete-post-<?= $post['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabdel">Delete Post: <?= $post['title']; ?></h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-start">
                          This action cannot be reversed.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <form method="POST" action="/post/delete">
                            <input type="hidden" name="id" value="<?= $post['id']; ?>" />
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>Delete Post</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </td>
            </tr>
           
      </div>
      <div class="text-center">
        <a href="/dashboard" class="btn btn-link btn-sm"
          ><i class="bi bi-arrow-left"></i>Back to Dashboard</a
        >
      </div>
    </div>
    <?php require 'parts/footer.php';
