<?php 
$idcon=mysqli_connect("localhost" ,"root", "","tableaudebord");

if(isset($_GET['id'])){

 
$id=$_GET['id'];
$del="DELETE FROM finance WHERE id_fin='$id'";

$result=mysqli_query($idcon,$del);

if($result){
header("location:finance_view.php");    
}else{
echo "<script>alert('erreur de suppression');</script>"; 

}

}
?>