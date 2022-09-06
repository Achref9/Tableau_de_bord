<?php 
$idcon=mysqli_connect("localhost" ,"root", "","tableaudebord");

if(isset($_GET['id'])){

 
$id=$_GET['id'];
$del="DELETE FROM rh WHERE id_rh='$id'";

$result=mysqli_query($idcon,$del);

if($result){
    echo "<script type='text/javascript'>alert('Projet supprimé avec succée');window.location='RH_view.php'</script>";
}else{
echo "<script>alert('erreur de suppression');</script>"; 

}

}
?>