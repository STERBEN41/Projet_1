<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>LES DIVISUERS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
      <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">Voir Exos</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Exercice_1.php">Programme Panlidrome </a></li>
                <li><a class="dropdown-item" href="Exercice_2.php">Programme Multiple</a></li>
                <li><a class="dropdown-item" href="Exercice_3.php">Programme Tirage</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="Exercice_4.php">Programme Compteur</a></li>
                <li><a class="dropdown-item" href="Exercice_5.php">Programme PPCM</a></li>
                <li><a class="dropdown-item" href="Exercice_6.php">Programme Cercle</a></li>
                <li><a class="dropdown-item" href="Exercice_7.php">Programme Nombre parfait</a></li>
                <li><a class="dropdown-item" href="Exercice_8.php">Programme Tableau de notes</a></li>
                <li><a class="dropdown-item" href="Exercice_9.php">Programme Tableau multidimensionnel</a></li>
                <li><a class="dropdown-item" href="Exercice_10.php">Programme Fin d'année</a></li>
                <li><a class="dropdown-item" href="Exercice_11.php">Programme de Formulaire</a></li>
                <li><a class="dropdown-item" href="Exercice_12.php">Programme de Formulaire 2</a></li>
                <li><a class="dropdown-item" href="Exercice_13.php">Programme de Sinus </a></li>
                <li><a class="dropdown-item" href="Exercice_14.php">Programme de Diviseur d'un entier </a></li>
            </ul>
        </li>
    </ul>
    </div>
    
    <!-- Main Content Section -->
    <div class="main-content"> 

        <h1>Programme diviseurs</h1>
        <p>Ici vous trouverez un programme qui affiche 
            l’ensemble des diviseurs d’un nombre saisi au clavier.
        </p>

        <form method="post" class="card p-4 shadow-sm">
            <div>
                <label class="form-label">Saisir un nombre</label>
                <input type="number" name="num" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">soumettre</button>
        </form>
        <?php 
        
        if (isset($_POST['num'])){
            $num = $_POST['num'] ;
            if($num <= 0){
                echo "<div class='alert alert-danger'>Veuillez saisir un nombre entier positif.</div>";
        } else {
            $diviseurs = [] ; 
            for($i = 1; $i <= $num; $i++){
                if($num % $i == 0){
                    $diviseurs[] = $i ;
                }
            } ?>
            <div class="card border-success">
                <div class="card-header bg-success text-white">
                    Résultat
                </div>
                <div class="card-body">
                    <p>
                        <strong>Les diviseurs de <?= $num ?> sont :</strong>
                    </p>

                    <ul class="list-group list-group-flush mb-3">
                        <?php foreach ($diviseurs as $d) { ?>
                            <li class="list-group-item"><?= $d ?></li>
                        <?php } ?>
                    </ul>

                    <span class="badge bg-primary">
                        Nombre total de diviseurs : <?= count($diviseurs) ?>
                    </span>
                </div>
            </div>

        <?php
        }
        }
        
        ?>

    </div>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>