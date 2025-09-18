<?php
$conn=mysqli_connect("localhost","root","","book");

if(!$conn){
    die("Invalid");
}
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT* FROM  staff WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo("success");
    exit();
    
}else{
    echo("try again");
}
mysqli_close($conn);
?>