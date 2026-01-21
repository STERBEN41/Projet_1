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
                <li><a class="dropdown-item" href="Exercice_13.php">Programme de Formulaire 3</a></li>
                <li><a class="dropdown-item" href="Exercice_14.php">Programme de Formulaire 4</a></li>
            </ul>
        </li>
    </ul>
    </div>
    <!-- Main Content Section -->
    <div class="main-content"> 

        <h1>Programme Tirage au sort</h1>
        <p> Ici vous trouverez mon programme qui permet de réaliser un tirage au 
            sort pour retrouver un nombre à 3 chiffres fournie par l'utilisateur. L'utilisateur 
            doit saisir un nombre entre 100 et 999, et le programme génère des nombres 
            aléatoires jusqu'à ce qu'il trouve le nombre saisi. 
        </p>
        <form method="post" action="">
            <input type="number" name="num" placeholder="saisir un nombre" required>
            <button type="submit">Soumettre</button>
        </form>
        <?php
        if (isset($_POST['num'])) { // Vérifie si le nombre est soumis
            $num = $_POST['num']; // Récupère le nombre saisi
            if ($num < 100 || $num > 999) {
                echo "Veuillez saisir un nombre valide entre 100 et 999,";
            } 
            else{
            $Tirage = 0 ;
            $compteur = 0 ;
                while ($Tirage != $num) {
                    $Tirage = rand(min: 100, max: 999);
                    $compteur++ ;
                }
            echo "<p>Félicitations ! Le nombre $num a été trouvé après $compteur tentatives.</p>";
            } 
        } ?>
       
    </div>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>
    
</body>
</html>