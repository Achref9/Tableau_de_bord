<?php
if(isset ($_POST["export"]) ){


$connect = mysqli_connect("localhost", "root","", "tableaudebord");

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=RH.csv');
$output = fopen("php://output", "w");
fputcsv($output, array ('ID', 'Projet', 'finalité du projet', 'cout estimatif', 'Ressources budgetair', 'Date de démarrage',"taux d'evaluation","Group de travail", 'État' ));
$query = "SELECT * from rh ORDER BY id_rh ASC";
$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_assoc($result)){
    fputcsv($output, $row);
}
fclose($output);
}
?>