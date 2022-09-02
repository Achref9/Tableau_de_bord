<?php
session_start();

include_once("db.php");
$conn = myConnection();
 
if((isset($_POST['projet']) && $_POST['projet']!='') 
	&& (isset($_POST['finalite']) && $_POST['finalite']!='') 
	&& (isset($_POST['budget']) && $_POST['budget']!='')
	&& (isset($_POST['date']) && $_POST['date']!='') 
	&& (isset($_POST['taux']) && $_POST['taux']!='') 
	&& (isset($_POST['cout']) && $_POST['cout']!='')
	&& (isset($_POST['grp']) && $_POST['grp']!='')
	&& (isset($_POST['stat']) && $_POST['stat']!='')) {			
		$projet = $conn->quote($_POST['projet']);
		$finalite = $conn->quote($_POST['finalite']);
		$cout = $conn->quote($_POST['cout']);
		$budget = $conn->quote($_POST['budget']);
		$date= $conn->quote($_POST['date']);
		$grp = $conn->quote($_POST['grp']);
		$taux = $conn->quote($_POST['taux']);
		$stat = $conn->quote($_POST['stat']);
	}

$query="insert into rh VALUES (NULL, $projet, $finalite, $cout, $budget , $date , $taux, $grp, $stat)";
$result=$conn->exec($query);

if ($result!=1) {
	die("<p>not added! ".$conn->errorInfo()[2]."</p>");
}

else {
	header("location:RH_view.php");
}

//$dec = mysqli_close($conn);
?>