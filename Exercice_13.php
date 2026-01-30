<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>SINUS</title>
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

    <div class="main-content">

    <h1>Programme Sinus</h1>
    <p>
        À partir de la fonction sinus de PHP, écrivez une fonction qui donne le sinus d’un angle donné en radian, en degré ou en grade. 
        Les paramètres sont la mesure de l’angle, et l’unité est symbolisée par une lettre. 
        Le deuxième paramètre doit avoir une valeur par défaut correspondant aux radians.
    </p>

    <form method="post" class="card p-4 shadow-sm">
    <div class="mb-3">
        <label class="form-label">Valeur de l’angle</label>
        <input type="number" step="any" name="angle" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Unité de l’angle</label>
        <select name="unite" class="form-select">
            <option value="r">Radian</option>
            <option value="d">Degré</option>
            <option value="g">Grade</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Calculer</button>
    </form>
    
    <?php 
        if (isset($_POST['angle'], $_POST['unite'])) {
            $angle = floatval($_POST['angle']);
            $unite = $_POST['unite'];

            $resultat = sinusAngle($angle, $unite);
        }
        function sinusAngle($angle, $unite = 'r')
        {
            switch ($unite) {
                case 'd': 
                    $angle = deg2rad($angle);
                    break;

                case 'g': 
                    $angle = $angle * pi() / 200;
                    break;

                case 'r': 
                default:

                    break;
            }

            return sin($angle);
        }

        if (isset($resultat)) { ?>
        <div class="alert alert-success mt-4">
            <strong>Résultat :</strong> sin(<?= htmlspecialchars($angle) ?>) = <?= $resultat ?>
        </div>
        <?php } 
    ?>

    </div>

     <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>