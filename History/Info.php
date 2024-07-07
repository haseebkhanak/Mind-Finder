<?php
 $servername = "localhost";
 $username = "id21150490_haseebak";
 $password = "Pakistan123#";
 $dbname = "id21150490_mindfind_project";
 
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
 if (!$conn) {
     die("Connection is not successful: " . mysqli_connect_error());
 } 
 
 else 
 {   
     session_start();
     if ($_SERVER['REQUEST_METHOD'] === 'POST') 
     {
         $score_3 = $_POST['score_3'];
 
         $email = $_SESSION['Email']; // Retrieve the email from the session
 
         //update the result after every play

         $sql="UPDATE histry_result set Score='$score_3' where Email='$email'";
         $result=mysqli_query($conn,$sql);

         if ($result)
         {
         $sql = "INSERT INTO histry_result VALUES ( '$email','$score_3')";
         $result = mysqli_query($conn, $sql);
 
         if ($result) 
         {
            
             $sql = "SELECT details.Id, details.Name, histry_result.Score FROM details INNER JOIN histry_result ON details.Email = histry_result.email
             WHERE details.Email = '$email'";
             $result = mysqli_query($conn, $sql);
             $rows = mysqli_num_rows($result);
 
             if ($rows > 0) 
             {
                 $row = mysqli_fetch_assoc($result);
                 echo ("<nav class='navbar navbar-expand-sm bg-dark'>
                     <div class='container-fluid'>
                         <span class='navbar-text text-white'>Mind Finder</span>
                         <a href='../main2.php'><button class='btn btn-danger' id='button'>Home</button></a>
                     </div>
                 </nav>");
 
                 echo ("<h1 class='text-center my-3'>Your Score</h1>");
                 echo ("<div class='container'>
                     <table class='table table-bordered table-dark'>
                         <tr>
                             <th>Id</th>
                             <th>Name</th>
                             <th>Score</th>
                         </tr>
                         <tr>
                             <td>$row[Id]</td>
                             <td>$row[Name]</td>
                             <td>$row[Score]</td>
                         </tr>
                     </table>
                 </div>");
             }
         } 
         
         else 
         {
             // Error inserting score
             echo "Error inserting score: " . mysqli_error($conn);
             // header("location:../main2.php");
         }
     } 
    }     
     else 
     {
         // Invalid request method
         header("location:../main2.php");
     }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <style>
        body{
           background-color: rgb(220, 243, 236);
        }
    </style>
</head>
<body>

</body>
</html>