<?php
session_start();
include "connect.php";
$username=$_POST["username"];
$mobile=$_POST["mobile"];
$password=$_POST["password"];
$std=$_POST["std"];
$sql="select * from `user data` where username='$username' and mobile='$mobile' and password='$password' and std='$std' ";
$results=mysqli_query($con,$sql);
if(mysqli_num_rows($results)>0){
    $sql="select username,photo,votes,id from `user data` where std='group'";
    $resultgroup=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultgroup)>0){
        $group=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
        $_SESSION['group']=$group;
    }
    $data=mysqli_fetch_array($results);
    $_SESSION['id']=$data['id'];
    $_SESSION['status']=$data['std'];
    $_SESSION['data']=$data;
    echo '<script>
    
    window.location="../partials/dashboard.php";
    </script>'; 
   
}
else{
    echo '<script>
    alert("Invalid credentilas");
    window.location="../";
    </script>'; 
}

?>