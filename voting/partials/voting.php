<?php

session_start();
include "connect.php";
$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;
$gid=$_POST['groupid'];
$uid=$_SESSION['id'];
$updatedvotes=mysqli_query($con,"update `user data` set votes='$totalvotes' where id='$gid'");
$updatedstatus=mysqli_query($con,"update `user data` set status=1 where id='$uid'");
if($updatedvotes and $updatedstatus ){
    $getgroups=mysqli_query($con,"Select username,photo,votes,id from `user data` where std='group'");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;
    echo '<script>
    alert("Voting successful");
    window.location="../partials/dashboard.php";
    </script>'

}

else{
    echo '<script>
    alert("Technical error");
    window.location="../partials/dashboard.php";
    </script>'
}







?>
