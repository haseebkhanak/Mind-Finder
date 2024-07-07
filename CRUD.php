<?php
 $servername="localhost";
 $username="id21150490_haseebak";
 $password="Pakistan123#";
 $dbname="id21150490_mindfind_project";

 $conn=mysqli_connect($servername,$username,$password,$dbname);

 if(!$conn)
 {
     die("Connection is not successfull".mysqli_connect_error());
 }

 else{
    // echo"Connection is successfull<br>";
 }

 //here we have make table for signup form

//  $sql="CREATE TABLE details(
//      Id int Auto_Increment primary key,
//      Name varchar(20),
//      Email varchar(50) unique,
//      Password varchar(50),
//      Confirm_Password varchar(50)
 
//  )";
//      $result=mysqli_query($conn,$sql);
//      if(!$result)
//      {
//          echo "Error is ".mysqli_error($conn);
//      }
 
//      else{
//          echo"Created";
//      }

//  $sql="TRUNCATE TABLE details";
//     $result=mysqli_query($conn,$sql);
//     if(!$result)
//     {
//         echo "Error is ".mysqli_error($conn);
//     }

//     else{
//         echo"Truncated";
//     }

// $sql="Drop database score";
// $result=mysqli_query($conn,$sql);
// if(!$result)
// {
//     echo "Error is ".mysqli_error($conn);
// }

// else{
//     echo"db drop";
// }

//HERE WE HAVE MAKE TABLE FOR CONTACT_US FORM

// $sql="CREATE TABLE contact_us(
//     name varchar(20),
//     email varchar(50),
//     message varchar(100)
// )";
//     $result=mysqli_query($conn,$sql);
//     if(!$result)
//     {
//         echo "Error is ".mysqli_error($conn);
//     }

//     else{
//         echo"Created";
//     }

// $sql="DROP TABLE sports_result";
// $result=mysqli_query($conn,$sql);
//  if($result)
//     {
//         echo("Drop");
//     }

//     else{
//         echo("Not Drop").mysqli_error($conn);
//     }

//HERE WE HAVE MAKE TABLE FOR CURRENT AFFAIRS SECTION
// $sql="CREATE TABLE Ca_Result(
//     email varchar(50),
//     score varchar(10),
//     Foreign key (email) references details(Email)
// )";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo("Table Created");
// }

// else{
//     eco("Not Created");
// }

//HERE WE HAVE MAKE TABLE FOR GK SECTION
// $sql="CREATE TABLE Gk_Result(
//     email varchar(50),
//     score varchar(10),
//     Foreign key (email) references details(Email)
// )";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo("Table Created");
// }

// else{
//     eco("Not Created");
// }

// //HERE WE HAVE MAKE TABLE FOR History SECTION
// $sql="CREATE TABLE Histry_Result(
//     email varchar(50),
//     score varchar(10),
//     Foreign key (email) references details(Email)
// )";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo("Table Created");
// }

// else{
//     eco("Not Created");
// }

// //HERE WE HAVE MAKE TABLE FOR Sports SECTION
// $sql="CREATE TABLE Sports_Result(
//     email varchar(50),
//     score varchar(10),
//     Foreign key (email) references details(Email)
// )";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo("Table Created");
// }

// else{
//     eco("Not Created");
// }


    // $sql="Insert into students(Name,number)values('Haseeb','123456')";
    // $result=mysqli_query($conn,$sql);

    // if($result)
    // {
    //     echo("Inserted");
    // }

    // else{
    //     echo("Not Inserted").mysqli_error($conn);
    // }

    
    // $sql="Insert into subject(Course)values('WST')";
    // $result=mysqli_query($conn,$sql);

    // if($result)
    // {
    //     echo("Inserted");
    // }

    // else{
    //     echo("Not Inserted").mysqli_error($conn);
    // }


    // $sql="SELECT students.Name,subject.Course from students inner join subject on students.Id=subject.Id";
    // $result=mysqli_query($conn,$sql);

    // $rows=mysqli_num_rows($result);
    // if($rows>0)
    // {
    //     while($row=mysqli_fetch_assoc($result))
    //     echo ($row['Name']." | ".$row['Course']);
    // }

    // else{
    //     echo("Not fetch").mysqli_error($conn);
    // }

//     $sql="SELECT Name,Email from details where Id =3";
// $result=mysqli_query($conn,$sql);

// $rows=mysqli_num_rows($result);
// if($rows>0)
// {
//     while($row=mysqli_fetch_assoc($result))
//     echo $row['Name']. ' | ' .$row['Email']."<br><br>";
// }

//  $sql="ALTER TABLE sports_result Drop score_id ";
//  $result=mysqli_query($conn,$sql);
//  if($result)
//  {
//     echo("Alter");
//  }
//  else{
//     echo("Not alter").mysqli_error($conn);
//  }

//  $sql="TRUNCATE TABLE gk_result  ";
//  $result=mysqli_query($conn,$sql);
//  if($result)
//  {
//     echo("Truncated");
//  }
//  else{
//     echo("Not Truncated").mysqli_error($conn);
//  }

// $sql="Select * from details inner join history_result on details.Id=history_result.score_Id ";
// $result=mysqli_query($conn,$sql);

// $rows=mysqli_num_rows($result);

// if($rows>0)
// {
//     while($row=mysqli_fetch_assoc($result))
//     echo($row['Id'].' | '.$row['Name'].' | '.$row['Email'].' | '.$row['Password'].' | '.$row['Score']."<br>");
// }