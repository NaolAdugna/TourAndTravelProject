<html>
    <body>
        <?php  
            $Date=$_POST["arrival"];
            $Date2=$_POST["departure"];
            $adult=$_POST["adult"];
            $child=$_POST["child"];
            $name=$_POST["name"];
            $address=$_POST["address"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];
            $room=$_POST["room"];
            $escort=$_POST["escorting"];
            $destinaiton=$_POST["destinationToVisit"];
            $otherDestination=$_POST["otherDestination"];
            $comment=$_POST["comment"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "gugutourandtravel";
    
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            if(!$conn){
                die("connection failed" .mysqli_connect_error());
            }

            $sql="INSERT INTO designyourtour VALUES ('$Date','$Date2','$adult','$child','$name','$address','$email','$phone','$room','$escort','$destinaiton','$otherDestination','$comment')";

        if(mysqli_query($conn,$sql)){
            if($sql){
            header("location: thankyou.php");
        } 
         }else{
            echo "error has occured" .$sql. "<br>" .mysqli_error($conn) ;
        }
        mysqli_close($conn);
        ?>
    </body>
</html>