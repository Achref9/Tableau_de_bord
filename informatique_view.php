<?php



?>
<title>table</title>
<style>
    body{
        width: 100%;
min-height: 100vh;
background: #e5e4e2;

display: flex;
justify-content: center;
align-items: center;
    }
        ul li
{
    list-style-type: none;
}
table th{
color: black;
padding: 10px;}
table td{
    color: black;
font-size: 1.2em;
}

        </style>
        
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<?php
$idcon=mysqli_connect("localhost" ,"root", "","tableaudebord");

$requet="select * from informatique";
$res=mysqli_query($idcon, $requet);
?>



<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
	<a href="#"><strong><span class="fa fa-dashboard"></span>Liste des données</strong></a>
	<hr>
   
      <a  href="dashboard.php"><button class="btn btn-primary btn-xs" ><i class="fas fa-arrow-left"></i>Retourner au Dashboard</button></a> 

	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10">
				<h3 class="panel-title"></h3>
			</div>
			<div class="col-md-2" align="right">
				<a href="add_informatique.php"><button type="button" name="add"  class="btn btn-success btn-xs">Ajouter</button></a>
            </div>

		</div>
	</div>
    
    




	<table id="userList" class="table table-bordered table-striped ">
		<thead>
            <tr><td colspan="9" style="background:#047CFC"><span style="color:white">données des projets d'informatique</tr>
			<tr>
				<th>ID</th>
				<th>projet</th>
				<th>finalité du projet</th>
				<th>cout estimatif</th>
				<th>Ressources budgetair</th>
				<th>Date de démarrage</th>
				<th>taux d'evaluation</th>
				<th >supprimer</th>					
				<th >modifier</th>					
								
									
								
				
			</tr>
            <?php
while ($ligne=mysqli_fetch_array($res))

{

?>
<tr>

<td><b><?php echo $ligne[0]; ?></b></td> 								
<td><?php echo $ligne[1]; ?></td>
<td><?php echo $ligne[2]; ?></td>
<td><?php echo $ligne[3]; ?></td>
<td><?php echo $ligne[4]; ?></td>
<td><?php echo $ligne[5]; ?></td>
<td><?php echo $ligne[6]; ?></td>


<form method="POST" action="">
<td>
	<?php echo "<a id='delete_id' name='delete' class='btn btn-danger' href='delete_info.php?id=".$ligne['id_info']."'> Supprimer</a> ";?>
</td>
<td><?php echo "<a id='edit_id' name='edit' class='btn btn-primary' href='edit_info.php?id=".$ligne['id_info']."'> Modifier</a> ";?></td>
</form>
</tr>

<?php

}

mysqli_close($idcon);
?>
		</thead>
	</table>
	
</div>

 
</ul>

