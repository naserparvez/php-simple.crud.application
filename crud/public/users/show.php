<?php require_once("../../private/initialize.php");?>
<?php
//if(isset($_GET['id'])){
  //  $id=$_GET['id'];
//}
$id=$_GET['id']??'1';

$user=find_user_by_id($id);
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
</div>

<?php include(SHARED_PATH .('/user_footer.php'));?>