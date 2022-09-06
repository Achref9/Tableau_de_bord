<?php 
$idcon=mysqli_connect("localhost" ,"root", "","tableaudebord");

if(isset($_GET['id'])){

 
$id=$_GET['id'];
$del="DELETE FROM finance WHERE id_fin='$id'";

$result=mysqli_query($idcon,$del);

if($result){
echo "<script type='text/javascript'>alert('Projet supprimé avec succée');window.location='finance_view.php'</script>";
  
}else{
echo "<script>alert('erreur de suppression');</script>"; 

}

}
?>