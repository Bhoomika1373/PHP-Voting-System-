<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System Registeration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-dark">
<h1 class="text-info text-center p-3">VOTING SYSTEM</h1>
<div class="bg-info">
<h2 class="text-center">Registeration</h2>
<div class="container text-center">
<form action="../action/register.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" name="username" placeholder="enter your username" required maxlength="30">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="enter your number" required maxlength="10">
            </div>
            
            <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" name="password" placeholder="enter your password" required minlength="8">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" name="cpassword" placeholder="confirm your password" required minlength="8">
            </div>

            <div class="mb-3">
                <input type="file" class="form-control w-50 m-auto" name="photo">
            </div>

            <div class="mb-3">
                <select name="std" class="form-select w-50 m-auto">
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-dark my-4 ">Register</button>
                <p>Already have an account 
                <a href="../ind.php" class="text-white">Login here</a></p>
            </div>
</form>
</div>
</div>

</body>
</html>