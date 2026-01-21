<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>MULTIPLE</title>
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <a href="index.html"> Acceuil </a>
        <a href="Exercice_1.php"> Programme Panlidrome </a>
        <a href="Exercice_3.php"> Programme Tirage </a>
        <a href="Exercice_4.php"> Programme Compteur </a>
        <a href="Exercice_5.php"> Programme PPCM </a>
        <a href="Exercice_6.php"> Programme Cercle</a>
    </div>

    <!-- Main Content Section -->
    <div class="main-content"> 
        <h1>Programme Multiple</h1>
        <p> Ici vous trouverez mon programme qui permet de déterminer si un 
            nombre est un multiple de 3 et de 5 à la fois. Un nombre A est un multiple 
            d'un nombre B si la division de A par B donne un reste de zéro. Par 
            exemple, 15 est un multiple de 5 car 15 divisé par 5 égale 3 sans 
            reste.
        </p>

    <form method="post" action="">
        <input type="number" name="num" placeholder="Saisir un nombre" required>
        <button type="submit">Vérifier</button>
    </form>
    <?php
    if (isset($_POST['num'])) { // Vérifie si le nombre est soumis
        $num = $_POST['num']; //    Récupère le nombre saisi
        if ($num % 3 == 0 && $num % 5 == 0) {
            echo "<p>Le nombre $num est un multiple de 3 et de 5.</p>";
        } else {
            echo "<p>Le nombre $num n'est pas un multiple de 3 et de 5.</p>";
        }
    }
    ?>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>
</body>
</html>