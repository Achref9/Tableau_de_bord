<?php 
$idcon=mysqli_connect("localhost" ,"root", "","tableaudebord");

if(isset($_GET['id'])){

 
$id=$_GET['id'];
$del="DELETE FROM maintenance WHERE id_m='$id'";

$result=mysqli_query($idcon,$del);

if($result){
header("location:main_view.php");    
}else{
echo "<script>alert('erreur de suppression');</script>"; 

}

}
?>