<?php 

$server='localhost';
$username='root';
$password='';
$database='sample_job_portal';

$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)(
    die("Connection failed:$conn->connect_error")
);
echo"";
session_start();
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_number'];
    $password=$_POST['password'];

    $sql= "INSERT INTO `users`(`name`, `email`, `password`, `phone`) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn,$sql)){
       
        header("location:index.php");

    }else{
        echo "ERROR:Could not able to execute $sql." .mysqli_error($conn);
    }
}

if(isset($_POST["login"])){
$email-$_POST['emailid'];
$password=$_POST['password1'];
$mailid=strip_tags( mysql_real_escape_string( $mail, $conn ) );
$password=strip_tags( mysql_real_escape_string( $password, $conn ) );

/* set the sql statement - using quotes around values if they are strings */
$sql="SELECT `email`, `password` FROM `users` where `email` = '$email' and `password` = '$password';";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_fetch_rows($result)==1){
header("location:index.php");
}
else{
$error='emailid or password is incorrect';
}
}


if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $jdesc=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql= "INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$jdesc','$skills','$CTC')";
    if(mysqli_query($conn,$sql))
    {
        echo '<script>alert("Added new Job ")</script>';
        header("location:index.php");
    }
    else{
        echo"Failed to post the job $sql. " . mysqli_error($conn);
    }
}

if(isset($_POST['apply'])){
    $name=$_POST['name'];
    $cname=$_POST['applycname'];
    $qual=$_POST['qual'];
    $yop=$_POST['yop'];


    $sql= "INSERT INTO `candidates`( `name`, `applycname`, `qual`, `yop`) VALUES ('$name','$cname','$qual','$yop')";
    if(mysqli_query($conn,$sql))
    {
        echo '<script>alert("Applied")</script>';
        header("location:career.php");
    }
    else{
        echo"Failed to post the job $sql. " . mysqli_error($conn);
    }
}

?>