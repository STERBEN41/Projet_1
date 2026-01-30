<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>Programme formulaire 2</title>
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

        <h1>Programme formulaire 2</h1>
        <p>Ici vous avez un formulaire demandant la saisie d’un prix HT et d’un taux de TVA. 
            Le script affiche le montant de la TVA et le prix TTC dans deux zones de texte créées dynamiquement.
            Le formulaire maintient les données saisies.
        </p>
        <form method="post" action="">
            <label class="form-label"> Saisir le prix HT</label>
            <input type="number" name="prixHt" required>
            <label class="form-label"> Saisir le taux de TVA</label>
            <input type="number" name="tva" required>
            <button type="submit">soumettre</button>
        </form>
        
        <?php 
        if (isset($_POST['prixHt']) && isset($_POST['tva'])){
            $prixHt = $_POST['prixHt'];
            $tva = $_POST['tva'];
            if ($prixHt <= 0 || $tva <= 0){
                echo"Saisie invalide. Veuillez entrer un montant HT et un taux de TVA valide." ;
            }
            else{
                $montantTva = $prixHt * ($tva / 100);
                $prixTtc = $prixHt + $montantTva ;
            }
        }
        ?>
        <p> Le montant TVA est de : <?php echo $montantTva ?> et le prix TTC est de : <?php echo $prixTtc ?> </p>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>