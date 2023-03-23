<?php 
    $firstName=$_POST["firstname"];
    $lastName=$_POST["lastname"];
    $userName=$_POST["username"];
    $email=$_POST["email"];
    $Password=$_POST["password2"];
    $Repassword=$_POST["password3"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gugutourandtravel";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn){
            die("connection failed" .mysqli_connect_error());
        }
            if($Password==$Repassword){
                $sql="INSERT INTO signup VALUES ('$firstName','$lastName','$userName','$email','$Password')";
                if(mysqli_query($conn,$sql)){ 
                    if($sql){
                    header("location: travel.php");
                    }
                } else{
                    header("location: signup.html");
                }
            }  
            else{
                echo"<alert>Password don`t match please fill out correctly</alert>";
            }

            mysqli_close($conn);
?>