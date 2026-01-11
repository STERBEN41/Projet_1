<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>PANLIDROME</title>
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

</body>
</html>