<?php require_once('../../private/initialize.php'); 

 if(is_post_request()){
    $user=[];
    $user['name']=$_POST['name'];
    $user['email']=$_POST['email'];
    $user['mobile']=$_POST['mobile'];
    $user['password']=$_POST['password'];

    $user=insert_user($user);
    redirect_to(WWW_ROOT. '/users/index.php');


 }else{
    $user['name']='';
    $user['email']='';
    $user['mobile']='';
    $user['password']='';
 }
 ?>


<?php include(SHARED_PATH .'/user_header.php') ?>

    <div class="container">
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" name="mobile">
        </div>
  
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
 
         <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <?php include(SHARED_PATH . '/user_footer.php') ?>