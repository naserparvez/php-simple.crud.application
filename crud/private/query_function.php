<?php
 function insert_user($user){
    global $db;

    $sql="INSERT INTO users ";
    $sql.="(name,email,mobile,password) ";
    $sql.="VALUES (";
    $sql.="'".$user['name']."',";
    $sql.="'".$user['email']."',";
    $sql.="'".$user['mobile']."',";
    $sql.="'".$user['password']."'";
    $sql.=")";

    $result=mysqli_query($db , $sql);
    return $result;
 }

 function find_all_users(){
    global $db;

    $sql="SELECT * FROM users";

    $result=mysqli_query($db, $sql);
    return $result;
 }

 function find_user_by_id($id){
   global $db;
   $sql="SELECT * FROM users ";
   $sql.="WHERE id='".$id."'";

  $result=mysqli_query($db,$sql);
  $user=mysqli_fetch_assoc($result);
  return $user;
 }

 function update_user($user){
   global $db;
   $sql="UPDATE users SET ";
   $sql.="name='".$user['name']."',"; 
   $sql.="email='".$user['email']."',"; 
   $sql.="mobile='".$user['mobile']."',"; 
   $sql.="password='".$user['password']."'"; 
   $sql.="WHERE id='".$user['id']."' ";

   $result=mysqli_query($db, $sql);
   return $result;
 }

 function delete_user_by_id($id){
   global $db;
   $sql="DELETE FROM users ";
   $sql.="WHERE id='".$id."'";

   $result=mysqli_query($db ,$sql);
   return $result;
 }

?>