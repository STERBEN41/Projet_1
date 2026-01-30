<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>Programme tableau de notes</title>
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
            </ul>
        </li>
    </ul>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">
        <h1>Programme tableau de notes</h1>
        <p> Ici vous trouverez mon programme qui permet de saisir les notes 
            d'une classe, de calculer la moyenne de la classe et d'afficher la moyenne, la
            note maximale et minimale.
        </p>
        <form method="post" action="">
            <label for="notes">Entrez les notes séparées par des virgules :</label>
            <input type="text" name="notes" required>
            <button type="submit">calculer</button>
        </form>
        <?php
            if (isset($_POST['notes'])) {
                $notes_input = $_POST['notes'];
                $notes_array = explode(separator: ',', string: $notes_input); // Divise les notes en un tableau et retire les virgules
                $notes_array = array_map(callback: 'trim', array: $notes_array); // Supprime les espaces inutiles
                $notes_array = array_map(callback: 'floatval', array: $notes_array); // Convertit les notes en nombres flottants

                $somme = array_sum($notes_array); 
                $nombre_notes = count($notes_array);
                $moyenne = $somme / $nombre_notes;
                $note_max = max( $notes_array);
                $note_min = min($notes_array); 
                 
                // var_dump($notes_array);
                // echo"voici la somme du tableau $somme";
                // var_dump($somme);
                // echo"<br>";
                // var_dump($nombre_notes);
                // echo"<br>";
                // var_dump($moyenne);
                // echo"<br>";
                // var_dump($note_max);
                // echo"<br>";
                // var_dump($note_min);
                // echo"$nombre_notes ";

                //  echo `Le nombre de notes saisie est : $nombre_notes et la moyenne = $moyenne`;
                // echo `La note maximale est : $note_max` ;
                //  echo `La note minimale est : $note_min` ;
                ?>

                <p>Le nombre de notes saisies est : <?php echo $nombre_notes; ?> et la moyenne est de : <?php echo $moyenne; ?></p>
                <p>La note maximale est : <?php echo $note_max; ?></p>
                <p>La note minimale est : <?php echo $note_min; ?></p>
                
        <?php
            }
        ?>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>