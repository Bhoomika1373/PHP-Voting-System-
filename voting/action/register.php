<?php
include 'connect.php';
/*accessing the values*/
$username=$_POST['username'];
$mobile=$_POST["mobile"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$image=$_FILES["photo"]["name"];
$tmp_name=$_FILES["photo"]["tmp_name"];
$std=$_POST["std"];

if($password!=$cpassword){
    echo '<script>
    alert("password didn\'t match");
    window.location="../partials/registeration.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into `user data`(username,mobile,password,photo,std,status,votes) values('$username','$mobile','$password','$image','$std',0,0)";
    $result=mysqli_query($con,$sql);
    if($result){
        echo '<script>
        alert("Registeration successfull!!");
        window.location="../";
        </script>';

    }
    else{
        die(mysqli_error($con));
    }
}




?>