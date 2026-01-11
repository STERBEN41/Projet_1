<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>VOYELLES & CONSONNES</title>
</head>
<body>

<!-- Header Section -->
    <div class="header">
        <a href="index.html"> Acceuil </a>
        <a href="Exercice_1.html"> Programme Panlidrome </a>
        <a href="Exercice_2.html"> Programme Multiple </a>
        <a href="Exercice_3.html"> Programme Tirage </a>
        <a href="Exercice_4.html"> Programme Compteur </a>
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
            $Longeur = len(string: $Phrase) ;
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
</body>
</html>