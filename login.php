<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $servername="localhost";
    $username="id21150490_haseebak";
    $password="Pakistan123#";
    $dbname="id21150490_mindfind_project";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("Connection is not successfull".mysqli_connect_error());
    }

    else
    {
        $sql="SELECT * FROM details where Email='$Email' And Password ='$Password'";

        $result=mysqli_query($conn,$sql);
        $rows=mysqli_num_rows($result);

        if($rows==1)
        {
            // echo "Insert Successfully";
            // echo '<div class="alert alert-success alert-dismissible">
            // <button class="btn-close" data-bs-dismiss="alert"></button>
            // <strong>Welcome You have been logged in successfully!</strong> 
            // </div>';

            session_start();
            $_SESSION['Email']=$Email;
            $_SESSION['Password']=$Password;
            header("location:main2.php");
        }

    else{
        echo '<div class="alert alert-danger alert-dismissible">
            <button class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Your credentials are not match plz confirm your email or password!</strong> 
            </div>';
            echo mysqli_connect_error();
    }
}   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

    <style>

        body{
            /* background-color: rgb(8, 7, 7); */
            background-color: rgb(244, 241, 237);
        }
        input[type=email],input[type=password]{
            width: 300px;
            margin-left: 20px;

        }

        .main{
            width: 350px;
            height: 400px;
            margin: auto;
            border: 2px solid black;
            border-radius: 40px;
        }

        .container1{
            display: flex;
            width: 320px;
            height: 50px;
            border: 2px solid rgb(223, 214, 214);
            margin: auto;
            margin-top: 10px;                
        }
        
            @media (max-width:500px) {
            .main{
            width: 250px;
            height: 400px;
        }

        input[type=email],input[type=password]{
            width: 200px;

        }
        }
    </style>
</head>
<body>
    <div class="container " style="margin-top: 80px;">
    
        <form action="login.php" class="main" method="POST">
            <p class="text-center mt-4 " style="font-size: 30px; font-weight: bold;">Sign In</p>
            <label for="email" class="form-label " style="margin-left: 20px; font-size: 30px;">Email</label>
            <input type="email" class="form-control" id="email" name="Email" placeholder="Email"> <br>
            <label for="password" class="form-label " style="margin-left: 20px; font-size: 30px;">Password</label>
            <input type="password" class="form-control" id="password" name="Password" placeholder="Password"> <br>
            <button class="btn btn-success mx-auto d-block" style="width: 100px; height: 50px; font-size: 25px;">Login</button>
        </form>

        <div class="container1">
            <p class=" ms-3">New to Mind Finder?</p>
            <a href="form.php" style="margin-left: 10px;">Create an account</a>
        </div>
    </div>
</body>
</html>