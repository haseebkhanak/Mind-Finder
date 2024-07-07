<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $confirm_pass = $_POST['confirm_pass'];
  
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

            $sql="Select * from details where Email='$Email'";
            $result=mysqli_query($conn,$sql);

            $rows=mysqli_num_rows($result);
            if($rows>0)
            {
                echo '<div class="alert alert-danger alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                Email already exist
                </div>';
            }

            else{
            $sql="INSERT INTO details values(Null,'$Name','$Email','$Password','$confirm_pass')";

            $result=mysqli_query($conn,$sql);

            if($result)
            {
                // echo "Insert Successfully";
                header("location:login.php");
                // echo '<div class="alert alert-success alert-dismissible">
                // <button class="btn-close" data-bs-dismiss="alert"></button>
                // Welcome <strong>' .$Name.'</strong> Your account has been created successfully
                // </div>';

            }
            
            else{
                echo "Not created".mysqli_error($conn);
            }
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
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

    <style>
        body{
            background-image: url(Images/bg3.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
    
        } 
        
        .transparent-form{
            width: 400px;
            height: 600px;
            background-color: rgba(255, 255, 255, 0.5);
            margin: auto;
            margin-top: 50px;
            border-radius: 20px;
            border: 2px solid black;
        }

        input[type=text],input[type=password],input[type=email]{
            width: 300px;
        }

        .display-6{
            font-weight: bold;
        }

        @media  (max-width: 450px) 
        {
            .transparent-form 
            {
              width: 270px;
            }
            input[type=text],input[type=password],input[type=email]
            {
              width: 180px;
            }
   
        }

        @media(max-width:1200px)
        {
            body{
                background-size: cover;
                background-position: center;
            }
        }

    </style>
</head>
<body>

   <div class="container">
    <form action="form.php" class="transparent-form"  method="post" onsubmit="return validation()">

        <p class="display-6 text-center mt-5">Create Account</p> 
        <label for="name" class="form-label ms-5 mt-3">Name</label> <span id="one" style="color: red;"></span>
        <input type="text" class="form-control ms-5" id="name" name="Name" placeholder="Enter your Name"> <br>

        <label for="email" class="form-label ms-5">Email</label>
        <input type="text" class="form-control ms-5" id="email" name="Email" placeholder="Enter your email" required> <br>

        <label for="password" class="form-label ms-5">Password</label>  <span id="two" style="color: red;"></span>
        <input type="password" class="form-control ms-5" id="password" name="Password"> <br>

        <label for="confirm_pass" class="form-label ms-5">Confirm Password</label> <span id="three" style="color: red;"></span>
        <input type="password" class="form-control ms-5" id="confirm_pass" name="confirm_pass"> <br>

        <div class="d-flex justify-content-center mt-4">

        <button class="btn btn-danger" id="signup" style="width: 100px; height: 40px;">Sign Up</button>
             
        </div>
    </form>
   </div>
</body>

<script>

    function validation()
    {

    let name=document.getElementById("name").value;
    let pass=document.getElementById("password").value;
    let confirm_pass=document.getElementById("confirm_pass").value;
    let a=/^[a-zA-Z\s]+$/ //It will check that whether string is alphabetical or not
    let b=/[a-zA-Z]/;
    let c=/[#@!%&]/;
    let d=/[\d]/;

    if(name=="")
    {
        document.getElementById("one").innerHTML="*Please Enter Your Name"
        return false;
    }

    if(!a.test(name))
    {
        document.getElementById("one").innerHTML="*Invalid Name"
        return false;
    }

    if(a.test(name))
    {
        document.getElementById("one").innerHTML=" "
    }

    if(name!="")
    {
        document.getElementById("one").innerHTML=" "
    }

    if(name.length<5)
    {
       document.getElementById("one").innerHTML="*Length is too short"
       return false;
    }

    if(name.length>5)
    {
      document.getElementById("one").innerHTML=" "
    }

    if(pass=="")
    {
        document.getElementById("two").innerHTML="*Enter Password"
        return false;
    }

    if(pass!="")
    {
        document.getElementById("two").innerHTML=" ";
    }

    var valid_pass=b.test(pass) && c.test(pass) && d.test(pass)

    if(!valid_pass)
    {
        document.getElementById("two").innerHTML="*Password should be strong"
        return false;
    }

    if(valid_pass)
    {
        document.getElementById("two").innerHTML=" ";
    }

    if(confirm_pass=="")
    {
        document.getElementById("three").innerHTML="*Confirm Your Password";
        return false;
    }

    if(confirm_pass!="")
    {
        document.getElementById("three").innerHTML=" ";
    }

    if(confirm_pass!=pass)
    {
        alert("Password are not same");
        return false;
    }
   
    else {
        return true;
    }

}

</script>
</html>