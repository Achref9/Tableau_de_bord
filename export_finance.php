<?php
if(isset ($_POST["export"]) ){


$connect = mysqli_connect("localhost", "root","", "tableaudebord");

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=finance.csv');
$output = fopen("php://output", "w");
fputcsv($output, array ('ID', 'Projet', 'finalité du projet', 'cout estimatif', 'Ressources budgetair', 'Date de démarrage',"taux d'evaluation" ));
$query = "SELECT * from finance ORDER BY id_fin DESC";
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_assoc($result)){
    fputcsv($output, $row);
}
fclose($output);
}
?>