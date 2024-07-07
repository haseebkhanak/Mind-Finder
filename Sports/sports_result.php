<?php
$servername = "localhost";
$username = "id21150490_haseebak";
$password = "Pakistan123#";
$dbname = "id21150490_mindfind_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection is failed: " . mysqli_connect_error());
} else {

    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       {
            $score_1 = $_POST['score_1'];

            $email=$_SESSION['Email'];//Retrieve email from session

            $sql = "INSERT INTO sports_result values( '$email','$score_1')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // echo "Score inserted successfully";

                header("location:../main2.php");
            } 
            else {
                echo "Error inserting score: " . mysqli_error($conn);
                // header("location:../main2.php");
            }
        }
    }
}

// $sql="UPDATE sports_result set Score='$score_1' where Score_Id=1";
// $result=mysqli_query($conn,$sql);
// if($result)
// {
//     // echo("Updated");
//     header("location:../main2.php");
// }
// else{
//     //echo("Not updated").mysqli_error($conn);
//     header("location:../main2.php");
// }

?>