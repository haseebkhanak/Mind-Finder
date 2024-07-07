<?php
$servername = "localhost";
$username = "id21150490_haseebak";
$password = "Pakistan123#";
$dbname = "id21150490_mindfind_project";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection is failed: " . mysqli_connect_error());
}

else{

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $sql="INSERT INTO contact_us values('$name','$email','$message')";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            // echo("Inserted");
             echo '<div class="alert alert-success alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Message has been sent successfully!</strong>
                </div>';
        }

        else{
            echo "Not inserted" . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-F6FukdIyJixu4GAS3+yhZWn0vFRzP8yFozKb9EsJ3ZPHjHsDoFw1vE+Gr5XZrh7IY/W0vWwuWUivP1R4fTkoHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }
        
        .jumbotron {
            padding: 100px 0;
            margin-bottom: 0;
        }
        
        .jumbotron h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 30px;
            color: black;
        }
        
        .jumbotron p {
            font-size: 20px;
            color: black;
        }
        
        .container {
            background-color: #fff;
            padding: 60px;
            margin-top: -50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        .container h2 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }
        
        .container p {
            font-size: 18px;
            line-height: 1.6;
        }
        
        .contact-form .form-group {
            margin-bottom: 30px;
        }
        
        .contact-form .form-group label {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        
        .contact-form .form-group input,
        .contact-form .form-group textarea {
            border: none;
            border-radius: 5px;
            background-color: #f8f8f8;
            padding: 15px;
            width: 100%;
            resize: none;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        .contact-form .form-group input:focus,
        .contact-form .form-group textarea:focus {
            outline: none;
        }
        
        .contact-form .form-group textarea {
            height: 150px;
        }
        
        .contact-form .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 18px;
            padding: 10px 30px;
            transition: background-color 0.3s ease;
        }
        
        .contact-form .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark ">

<div class="container-fluid">
   <span class="navbar-text text-white">Mind Finder</span>
   <a href="main.php"><button class="btn btn-danger" id="button">Home</button></a>


</div>
</nav>
    <div class="jumbotron">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row">
    <div class="col-md-6">
    <div class="contact-info">
            <button class="btn btn-dark">Phone:+923134718859</button> <br> <br>
            <button class="btn btn-dark">Email:saadkhanak13@gmail.com</button> <br> <br>
            <button class="btn btn-dark">linkdin:HaseebKhan</button>
    </div>

    </div>

</div>
        </div>
    </div>
    
    <div class="container">
        <h2>Send us a message</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="contact-form" action="contactus.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
