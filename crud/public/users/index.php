<?php require_once('../../private/initialize.php'); ?>

<?php
$user_set=find_all_users();

?>

<?php include(SHARED_PATH .'/user_header.php') ?>

    <div class="container">
        <button class="btn btn-primary my-5"><a class="text-light" href="create.php">Add User</a></button>
    </div>

    <div class="container">
       <table class="table">
          <thead>
            <tr>
              <th scope="col">SI No</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Password</th>
              <th>&nbsp;</th>
  	          <th scope="col">Operation</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
          <?php while($user = mysqli_fetch_assoc($user_set)){ ?>
            <tr>
              <td><?php echo $user['id']; ?></td>
              <td><?php echo $user['name']; ?></td>
              <td><?php echo $user['email']; ?></td>
              <td><?php echo $user['mobile']; ?></td>
              <td><?php echo $user['password']; ?></td>
              <td><button class="btn btn-primary"><a class="text-light"  href="<?php echo WWW_ROOT .('/users/show.php?id='.$user['id']);?>" >View</a></button></td>
              <td><button class="btn btn-primary"><a class="text-light" href="<?php echo WWW_ROOT .('/users/update.php?id='.$user['id']);?>" >Update</a></button></td>
              <td><button class="btn btn-danger"><a class="text-light" href="<?php echo WWW_ROOT .('/users/delete.php?id='.$user['id']);?>" >Delete</a></button></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>


<?php include(SHARED_PATH . '/user_footer.php') ?>

