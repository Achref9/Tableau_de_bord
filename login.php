<?php
include("db.php");



?>

<html>
<head>
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    <style>
        body {
            background: #e5e4e2;
            margin-top:150px;
        }

        .container {
            max-width: 550px;
            
        }

    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header text-center">Connecter au DashBoard</h5>
            <div class="card-body">
                <form method="POST" action="authentificate.php" >


                    <div class="form-group">
                        <label>Nom d'utilisateur</label>
                        <input type="text" name="username" class="form-control"  placeholder="Nom d'utilisateur"  required />

                        
                    </div>

                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" name="password" class="form-control item"   placeholder="Mot de passe" required>

                        
                    </div>

                    
                   

                    <div class="form-group">
                        <button class="btn btn-primary btn-block" name="confirmer" type="submit">confirmer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
