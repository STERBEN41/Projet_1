<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>Programme Compteur</title>
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
        </li>
    </ul>
    </div>

    <!-- Main Content Section -->
    <div class="main-content"> 
        <h1>Programme Compteur de Voyelles et Consonnes</h1>
        <p> Ici vous trouverez mon programme qui permet de compter le nombre 
            de voyelles et de consonnes dans un mot saisi par l'utilisateur. 
            Les voyelles sont les lettres A, E, I, O, U, Y (et leurs variantes 
            accentuées), tandis que les consonnes sont toutes les autres lettres 
            de l'alphabet.
        </p>
    <form method="post" action="">
        <label for="">Entrer une phrase</label>
        <input type="text" name="phrase" required> 
        <button type="submit">Compter</button>
    </form>
    <?php
        if (isset($_POST['phrase'])){
            $Phrase = $_POST['phrase'];
            $Voyelles = 0 ;
            $Consonnes = 0 ;
            $Phrase = str_replace(search: ' ', replace:'', subject: strtolower(string: $Phrase)) ; // Supprime les espaces et met en minuscule
            $Phrase = str_replace( search: ',', replace:'', subject: $Phrase) ; // Supprime les virgules
            $Phrase = str_replace( search: '.', replace:'', subject: $Phrase) ; // Supprime les points
            $Longeur = strlen($Phrase) ;
            for ($i = 0 ; $i < $Longeur ; $i++){
                $char = $Phrase[$i] ;
                if (in_array(needle: $char, haystack: ['a', 'e', 'i', 'o', 'u', 'y', 'à', 'â', 'ä', 'é', 'è', 'ê', 'ë', 'î', 'ï', 'ô', 'ö', 'ù', 'û', 'ü'])) {
                    $Voyelles++ ;
                } 
                else{
                    $Consonnes++ ;
                }
            }
            echo "<p>La phrase contient $Voyelles voyelles et $Consonnes consonnes.</p>" ;
        }
    ?>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>