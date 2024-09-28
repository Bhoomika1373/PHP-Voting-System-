<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-success">Voted</b>';
}
else{
    $status='<b class="text-danger">Not Voted</b>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-secondary text-light">
    <div class="container my-5">
    <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
    <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
    <h2 class="my-3">Voting System</h2>
    <div class="row my-4">
    <div class="col-md-7">
        <?php 
        if(isset($_SESSION['group'])){
           $groups= $_SESSION['group'];
           for($i=0;$i<count($groups);$i++){
            ?>
            <div class="row">
            <div class="col md-4">
                <img src="../uploads<?php echo $groups[$i]['photo']?>" alt=" group img">
            </div>
            <div class="col md-8">
                <strong class="text-dark h5">Group Name:</strong>
                <?php echo $groups[$i]['username']?>
                <br>
                <strong class="text-dark h5">Votes:</strong>
                <?php echo $groups[$i]['votes'] ?>
                <br>
            </div>
         </div>
         <hr>
         <form action="../action/voting.php" method="post">
         <input type="hidden"  name="groupvotes" value="<?php echo $groups[$i]['votes'] ?>">
         <input type="hidden"  name="groupid" value="<?php echo $groups[$i]['id'] ?>">
         </form>
<?php
        if($_SESSION['status']==1){
            $status='<b class="text-success">Voted</b>';
        }
           }
        }
      
?>
        <!-- group -->
         
    
    <div class="col-md-5">
    <img src="../uploads/<?php echo $data['photo']?>" alt="user img"><br><br>
    <strong class="text-dark h5">Name:</strong>
    <?php echo $data['username']?><br><br>
    <strong class="text-dark h5">Mobile:</strong>
    <?php echo $data['mobile']?><br><br>
    <strong class="text-dark h5">Status:</strong>
    <?php echo $status ?><br><br>


    </div>
    </div>
    </div>

   
</body>
</html>