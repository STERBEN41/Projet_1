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
            </ul>
        </li>
    </ul>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">

        <h1>Programme Fin d'année</h1>
        <p>Un programme qui détermine le nombre de jours restant avant la fin d'année à partir d'une date donné 
            par un utilisateur. Saisissez donc une date au format JJ/MM/AAAA.
        </p>
        <form method="post" action="Exercice_10.php">
            <label for="date_input">Date (JJ/MM/AAAA):</label>
            <input type="text" name="date_input" required>
            <input type="submit" value="Calculer">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") { //
            $date_input = $_POST['date_input'];
            $date_parts = explode('/', $date_input); // Diviser la date en jour, mois, année
            if (count($date_parts) == 3) {
                $day = (int)$date_parts[0];
                $month = (int)$date_parts[1];
                $year = (int)$date_parts[2];
                // Vérifier si la date est valide
                if (checkdate($month, $day, $year)) {
                    $input_date = DateTime::createFromFormat('d/m/Y', $date_input);
                    $end_of_year = new DateTime("$year-12-31");
                    $interval = $input_date->diff($end_of_year);
                    echo "<p>Il reste " . $interval->days . " jours avant la fin de l'année $year.</p>";
                } else {
                    echo "<p>Date invalide. Veuillez entrer une date valide au format JJ/MM/AAAA.</p>";
                }
            } else {
                echo "<p>Format de date incorrect. Veuillez utiliser le format JJ/MM/AAAA.</p>";
            }
        }
        ?>
        
    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>