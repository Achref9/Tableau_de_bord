<?php 
$idcon=mysqli_connect("localhost" ,"root", "","tableaudebord");

if(isset($_GET['id'])){

 
$id=$_GET['id'];
$del="DELETE FROM rh WHERE id_rh='$id'";

$result=mysqli_query($idcon,$del);

if($result){
header("location:RH_view.php");    
}else{
echo "<script>alert('erreur de suppression');</script>"; 

}

}
?>