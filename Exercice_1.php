<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>PANLIDROME</title>
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
        <h1>Programme Panlidrome</h1>

        <p> Ici vous trouverez mon programme qui permet de déterminer si un mot 
            est un panlidrome ou non. Un panlidrome est un mot qui se lit de la 
            même façon dans les deux sens. Par exemple, "ressasser" est un 
            panlidrome car il se lit de gauche à droite et de droite à gauche 
            de la même manière.
        </p>
    <form action="">
        <label for="mot">Entrez un mot :</label>
        <input type="text" id="mot" name="mot" required>
        <button type="submit">Vérifier</button>
    </form>
        
    <?php

    if (isset($_GET['mot'])) { // Vérifie si le mot est soumis
        $mot = $_GET['mot'];
        $mot = str_replace(search: ' ', replace:'', subject: strtolower(string: $mot)); // Supprime les espaces et met en minuscule
        $mot_inverse = strrev(string: $mot);

        if ($mot === $mot_inverse) {
            echo "<p>Le mot '$mot_inverse' est un panlidrome.</p>";
        } else {
            echo "<p>Le mot '$mot_inverse' n'est pas un panlidrome.</p>";
        }
    }
    ?>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>