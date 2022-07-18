<html>
<head>
    <title> Ajout projet finance</title>
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
            <h5 class="card-header text-center"><i class="fas fa-plus-circle"></i>Ajouter projet</h5>
            <div class="card-body">
                <form method="POST" action="finance_action.php" >


                    <div class="form-group">
                        <label>Nom du projet</label>
                        <input type="text" name="projet" class="form-control"  placeholder="Nom du projet"  required />

                        
                    </div>

                    <div class="form-group">
                        <label>Finalité du projet</label>
                        <input type="text" name="finalite" class="form-control item"   placeholder="Finalité du projet" required>

                        
                    </div>

                    <div class="form-group">
                        <label>Cout estimatif</label>
                        <input type="text" name="cout" class="form-control"  placeholder="Cout estimatif" required>

                        
                    </div>


                    <div class="form-group">
                        <label>Ressources budgetair</label>
                        <div class="form-group">
                            <input type="text" name="budget" class="form-control"   placeholder="Ressources budgetair" required />

                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Date de démarrage</label>
                        <div class="form-group">
                            <input type="date" name="date" class="form-control" required />

                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Taux d'évaluation</label>
                        <div class="form-group">
                            <input type="text" name="taux" placeholder="Taux d'évaluation" class="form-control" required />

                            
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