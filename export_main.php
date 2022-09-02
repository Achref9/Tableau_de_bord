<?php
if(isset ($_POST["export"]) ){


$connect = mysqli_connect("localhost", "root","", "tableaudebord");

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=maintenance.csv');
$output = fopen("php://output", "w");
fputcsv($output, array ('ID', 'Projet', 'Finalité du projet', 'Cout estimatif', 'Ressources budgetair', 'Date de démarrage',"Taux d'evaluation","Group de travail", 'État' ));
$query = "SELECT * from maintenance ORDER BY id_m ASC";
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_assoc($result)){
    fputcsv($output, $row);
}
fclose($output);
}
?>