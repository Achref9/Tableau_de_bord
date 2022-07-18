<?php
$conn=mysqli_connect('localhost','root',"",'tableaudebord');



$query = "SELECT id_info FROM informatique ORDER BY id_info";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);


$query2 = "SELECT id_fin FROM finance ORDER BY id_fin";
$query_run2 = mysqli_query($conn, $query2);
$row2 = mysqli_num_rows($query_run2);

?>
   <!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Dashboard</title>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   </head>
   <body>
      
      <nav>
         <div class="logo">
           DashBoard
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="informatique_view.php">Informatique</a></li>
            <li><a href="finance_view.php">Finance</a></li>
            <li><a href="#">Ressources Humaine</a></li>
            <li><a href="#">Maintenance</a></li>
            <li><a href="#">Projets</a></li>
            <li><a href="logout.php">Déconnecter</a></li>
         </ul>
      </nav>
      <div class="content">
      <div class="call-outs">
      <div class="h-50 card text-white bg-primary me-2" style="max-width: 18rem;">
  <div class="card-header"><h2>Informatique</h2></div>
  
  <div class="card-body">
  <i class="fas fa-laptop"></i> total: <?php  echo '<h2>'.$row.'</h2>'?>
    
    <hr>
    <div class="panel-footer">
      <h6><a style="text-decoration:none;color:white" href="informatique_view.php">
                        <span class="pull-left">Voire plus de détail</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div></h6></a>
  </div>
</div>
<div class="h-50 card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header"><h2>Finance</h2></div>
  <div class="card-body">
  <i class="fas fa-balance-scale"></i> Total: <?php  echo '<h2>'.$row2.'</h2>'?>
    <hr>
    <div class="panel-footer">
      <h6><a style="text-decoration:none;color:white" href="finance_view.php">
                        <span class="pull-left">Voire plus de détail</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div></h6></a>
  </div>
</div>
<div class="h-50 card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header"><h2>RH</h2></div>
  <div class="card-body">
  <i class="fas fa-male"></i> Total:12
    <hr>
    <div class="panel-footer">
      <h6><a style="text-decoration:none;color:white" href="">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div></h6></a>
  </div>
</div>
<div class="h-50 card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header"><h2>Maintenance</h2></div>
  <div class="card-body">
  <i class="fas fa-wrench"></i> Total:12
    <hr>
    <div class="panel-footer">
      <h6><a style="text-decoration:none;color:white" href="">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div></h6></a>
  </div>
</div>
<div class="h-50 card text-white bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header"><h2>Projets</h2></div>
  
  <div class="card-body">
  <i class="fas fa-project-diagram"></i> Total:12
    <hr>
    <div class="panel-footer">
      <h6><a style="text-decoration:none;color:white" href="">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div></h6></a>
  </div>
</div>




   </div>
      </div>
   </body>
</html>