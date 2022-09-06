<?php
$conn=mysqli_connect("localhost" ,"root", "","tableaudebord");

$id=$_GET['id'];

$query="select * from informatique where id_info=$id";

$res=mysqli_query($conn, $query);

$row=mysqli_fetch_array($res);


?>
<html>
<head>
    <title> modifier projet informatique</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    <style>
        body {
            background: #e5e4e2;
           
        }

        .container {
            max-width: 550px;
        }

    </style>
</head>

<body>
<a class="btn btn-primary" href="informatique_view.php">page précédente</a>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header text-center"><i class="fas fa-edit"></i>Modifier projet</h5>
            <div class="card-body">
                <form method="POST" action="">


                    <div class="form-group">
                        <label>Nom du projet</label>
                        <input type="text" name="projet" class="form-control"  placeholder="Nom du projet" value="<?php echo $row['projet'];?>"  required />

                        
                    </div>

                    <div class="form-group">
                        <label>Finalité du projet</label>
                        <input type="text" name="finalite" class="form-control item"   placeholder="Finalité du projet" value="<?php echo $row['finalite_projet'];?>" required>

                        
                    </div>

                    <div class="form-group">
                        <label>Cout estimatif</label>
                        <input type="text" name="cout" class="form-control"  placeholder="Cout estimatif" value="<?php echo $row['cout'];?>" required>

                        
                    </div>


                    <div class="form-group">
                        <label>Ressources budgetair</label>
                        <div class="form-group">
                            <input type="text" name="budget" class="form-control"   placeholder="Ressources budgetair" value="<?php echo $row['budget'];?>" required />

                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Date de démarrage</label>
                        <div class="form-group">
                            <input type="date" name="date" class="form-control" value="<?php echo $row['created_at'];?>" required />

                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Groupe de travail</label>
                        <div class="form-group">
                            <input type="text" name="grp" placeholder="Groupe de travail" class="form-control" value="<?php echo $row['groupe_trav'];?>" required />

                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Taux d'évaluation</label>
                        <div class="form-group">
                            <input type="text" name="taux" placeholder="Taux d'évaluation" class="form-control" value="<?php echo $row['Taux_eval'];?>" required />

                            
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label>Status</label>
                        <div class="form-group">
                        <select class="custom-select" name="stat">
                                    <option value="Actif">Actif</option>
                                    <option value="Terminé">Terminé</option>
                                    <option value="Suspendu">Suspendu</option>
                                    </select>
                            
                        </div>
                    </div>


                   

                    <div class="form-group">
                        <button class="btn btn-primary btn-block" name="confirmer" type="submit">confirmer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php

include_once("db.php");
$conn = myConnection();


if(isset($_POST['confirmer'])){
    $projet = $conn->quote($_POST['projet']);
    $finalite = $conn->quote($_POST['finalite']);
    $cout = $conn->quote($_POST['cout']);
    $budget = $conn->quote($_POST['budget']);
    $date= $conn->quote($_POST['date']);
    $grp = $conn->quote($_POST['grp']);
    $taux = $conn->quote($_POST['taux']);
    $stat = $conn->quote($_POST['stat']);

    $sql="update informatique set projet=$projet, finalite_projet=$finalite, cout=$cout, budget=$budget, created_at=$date, groupe_trav=$grp, Taux_eval=$taux, status=$stat where id_info=$id";
$result=$conn->exec($sql);

if($result){
    echo "<script type='text/javascript'>alert('Projet modifié avec succée')</script>";
    echo"<script>window.location.href='informatique_view.php'</script>";
}
    else{
        echo"<script>alert('error')</script>";
    }
} 



?>