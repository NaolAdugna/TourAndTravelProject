<html>
<body>
    <?php 
 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gugutourandtravel";

    
    $conn=mysqli_connect($servername,$username,$password,$dbname);
   
    if(!empty($_POST['submitt'])){

        $Name=$_POST["username"];
        $Pass=$_POST["password"];

        $query="INSERT INTO login VALUES('$_POST["username"]','$_POST[password]')";
        $ouput=mysqli_query($conn,$query);

        $sql="SELECT * FROM signup WHERE UserName= '$Name' and Password='$Pass' ";
        $result=mysqli_query($conn,$sql);
        
        $count=mysqli_num_rows($result);

        if($count>0){
            $query="INSERT INTO login VALUES('$Name','$Pass') ";
            $ouput=mysqli_query($conn,$query);
            if($result){
            header("location: travel.php");
        }
        } else{
            echo '<script>alert("Please go back and fill correct information ")</script>';
        }
   }


?>
</body>
</html>