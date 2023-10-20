<?php require_once('../../private/initialize.php'); 

    $id=$_GET['id']??'1';

 if(is_post_request()){
    $user=[];
    $user['id']=$id;
    $user['name']=$_POST['name'];
    $user['email']=$_POST['email'];
    $user['mobile']=$_POST['mobile'];
    $user['password']=$_POST['password'];

    $result=update_user($user);
    redirect_to(WWW_ROOT .'/users/index.php');


 }else{
    $user=find_user_by_id($id);
 }
 ?>


<?php include(SHARED_PATH .'/user_header.php') ?>

    <div class="container">
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name"  value="<?php echo $user['name'] ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $user['email'] ?>">
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $user['mobile'] ?>">
        </div>
  
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo $user['password'] ?>">
        </div>
 
         <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <?php include(SHARED_PATH . '/user_footer.php') ?>