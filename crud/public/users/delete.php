<?php require_once('../../private/initialize.php'); ?>
<?php
$id=$_GET['id']??'1';

if(is_post_request()){
    $user=delete_user_by_id($id);
    redirect_to(WWW_ROOT. '/users/index.php');

}else{

$user=find_user_by_id($id);
}
?>


<?php include(SHARED_PATH . ('/user_header.php')); ?>

<div class="container">
    <div>
        <h3>Name</h3>
        <p><?php echo $user['name'] ?></p>
    </div>
    <div>
        <h3>Email</h3>
        <p><?php echo $user['email'] ?></p>
    </div>
    <div>
        <h3>Mobile</h3>
        <p><?php echo $user['mobile'] ?></p>
    </div>

    <p>Want to delete?</p>

    <form action="<?php echo WWW_ROOT .'/users/delete.php?id='.$user['id'] ?>" method="POST">
     <button class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include(SHARED_PATH .('/user_footer.php'));?>