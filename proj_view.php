
<a href="#"><strong><span class="fa fa-dashboard"></span>Liste de tous les projets</strong></a>
	<hr>
    <a  href="dashboard.php"><button class="btn btn-primary btn-xs" ><i class="fas fa-arrow-left"></i>Retourner au Dashboard</button></a> 
<?php
$idcon=mysqli_connect("localhost" ,"root","","tableaudebord");

$requet="select * from rh";
$res=mysqli_query($idcon, $requet);

$requet2="select * from informatique";
$res2=mysqli_query($idcon, $requet2);

$requet3="select * from finance";
$res3=mysqli_query($idcon, $requet3);

$requet4="select * from maintenance";
$res4=mysqli_query($idcon, $requet4);



?>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<table id="userList" class="table table-bordered table-striped ">
		<thead>
            <tr><td colspan="9" style="background:#047CFC"><span style="color:white">données des projets d'informatique</tr>
			<tr>
				<th>ID</th>
				<th>Projet</th>
				<th>Finalité du projet</th>
				<th>Cout estimatif</th>
				<th>Ressources budgetair</th>
				<th>Date de démarrage</th>
				<th>Taux d'evaluation(%)</th>
				<th>Groupe de travail</th>
				<th>État</th>
							
								
									
								
				
			</tr>
            <br> <br> <br>
            <?php
while ($ligne2=mysqli_fetch_array($res2))

{

?>
<tr>

<td><b><?php echo $ligne2[0]; ?></b></td> 								
<td><?php echo $ligne2[1]; ?></td>
<td><?php echo $ligne2[2]; ?></td>
<td><?php echo $ligne2[3]; ?></td>
<td><?php echo $ligne2[4]; ?></td>
<td><?php echo $ligne2[5]; ?></td>
<td><?php echo $ligne2[6]; ?></td>
<td><?php echo $ligne2[7]; ?></td>
<td><?php echo $ligne2[8]; ?></td>



</tr>

<?php

}

?>
		</thead>
	</table>
	
</div>

<table id="userList" class="table table-bordered table-striped ">
		<thead>
            <tr><td colspan="9" style="background:GREY"><span style="color:white">données des projets de finance</tr>
			<tr>
				<th>ID</th>
				<th>Projet</th>
				<th>Finalité du projet</th>
				<th>Cout estimatif</th>
				<th>Ressources budgetair</th>
				<th>Date de démarrage</th>
				<th>Taux d'evaluation(%)</th>
				<th>Groupe de travail</th>
				<th>État</th>
								
								
									
								
				
			</tr>
            <?php
while ($ligne3=mysqli_fetch_array($res3))

{

?>
<tr>

<td><b><?php echo $ligne3[0]; ?></b></td> 								
<td><?php echo $ligne3[1]; ?></td>
<td><?php echo $ligne3[2]; ?></td>
<td><?php echo $ligne3[3]; ?></td>
<td><?php echo $ligne3[4]; ?></td>
<td><?php echo $ligne3[5]; ?></td>
<td><?php echo $ligne3[6]; ?></td>
<td><?php echo $ligne3[7]; ?></td>
<td><?php echo $ligne3[8]; ?></td>

</tr>

<?php

}

?>
		</thead>
	</table>
	
</div>





<table id="userList" class="table table-bordered table-striped ">
		<thead>
            <tr><td colspan="9" style="background:Green"><span style="color:white">données des projets des Ressources Humaines</tr>
			<tr>
				<th>ID</th>
				<th>Projet</th>
				<th>Finalité du projet</th>
				<th>Cout estimatif</th>
				<th>Ressources budgetair</th>
				<th>Date de démarrage</th>
				<th>Taux d'evaluation(%)</th>
				<th>Groupe de travail</th>
				<th>État</th>
							
								
									
								
				
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
<td><?php echo $ligne[7]; ?></td>
<td><?php echo $ligne[8]; ?></td>



</tr>

<?php

}

?>
		</thead>
	</table>
	
</div>


<table id="userList" class="table table-bordered table-striped ">
		<thead>
            <tr><td colspan="9" style="background:#e03444"><span style="color:white">données des projets des Ressources Humaines</tr>
			<tr>
				<th>ID</th>
				<th>Projet</th>
				<th>Finalité du projet</th>
				<th>Cout estimatif</th>
				<th>Ressources budgetair</th>
				<th>Date de démarrage</th>
				<th>Taux d'evaluation(%)</th>
				<th>Groupe de travail</th>
				<th>État</th>
								
								
									
								
				
			</tr>
            <?php
while ($ligne4=mysqli_fetch_array($res4))

{

?>
<tr>

<td><b><?php echo $ligne4[0]; ?></b></td> 								
<td><?php echo $ligne4[1]; ?></td>
<td><?php echo $ligne4[2]; ?></td>
<td><?php echo $ligne4[3]; ?></td>
<td><?php echo $ligne4[4]; ?></td>
<td><?php echo $ligne4[5]; ?></td>
<td><?php echo $ligne4[6]; ?></td>
<td><?php echo $ligne4[7]; ?></td>
<td><?php echo $ligne4[8]; ?></td>

</tr>

<?php

}

?>
		</thead>
	</table>
	
</div>

 
</ul>







 
