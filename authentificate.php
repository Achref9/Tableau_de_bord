<?php 
include("login.php");


$data=mysqli_connect("localhost","root","","tableaudebord");

if($_SERVER["REQUEST_METHOD"]="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select username, password ,user_type from login where username='" .$username."' AND password='".$password."'";
    $result = mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row["user_type"]=="admin")
{
    header ("location:dashboard.php");
}


else
{

    echo '<script type="text/javascript">alert("Nom utilisateur ou mot de pass incorrect!")</script>';
    echo "<script>window.location='login.php'</script>";
}
}

?>




