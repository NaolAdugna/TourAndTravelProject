<html>
<body>
    <?php
        $name=$_POST["name1"];
        $age=$_POST["age1"];
        $gender=$_POST["gender1"]; 
        $email=$_POST["email1"];
        $phone=$_POST["phone1"];
        $comment=$_POST["comment1"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gugutourandtravel";

        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn){
            die("connection failed" .mysqli_connect_error());
        }

        $sql="INSERT INTO contactus VALUES ('$name','$age','$gender','$email','$phone','$comment')";

        if(mysqli_query($conn,$sql)){
            header("location:travel.php");
        } else{
            echo "error has occured" .$sql. "<br>" .mysqli_error($conn) ;
        }
        mysqli_close($conn);
    
    ?>
</body>
</html>