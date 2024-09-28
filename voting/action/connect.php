<?php
$con=mysqli_connect("localhost","root","","voting system"); /*localhost,root,password(empty if not changed),db name*/
if($con){
echo "Connection Successful";
}
else{
die(mysqli_error($con));
}
?>
