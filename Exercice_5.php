<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>PPCM</title>
</head>
<body>

<!-- Header Section -->
    <div class="header">
        <a href="index.html"> Acceuil </a>
        <a href="Exercice_1.php"> Programme Panlidrome </a>
        <a href="Exercice_2.php"> Programme Multiple </a>
        <a href="Exercice_3.php"> Programme Tirage </a>
        <a href="Exercice_4.php"> Programme Compteur </a>
        <a href="Exercice_6.php"> Programme Cercle</a>
    </div>

    <!-- Main Content Section -->
    <div class="main-content"> 
        <h1>Programme calcule du PPCM</h1>
        <p> Ici vous trouverez mon programme qui permet de calculer le Plus Petit 
            Commun Multiple (PPCM) de deux nombres saisis par l'utilisateur. Le PPCM 
            de deux nombres est le plus petit nombre qui est un multiple commun des 
            deux nombres.
        </p>
        <form method="post" action="">
            <label for="">Entrer le premier nombre</label>
            <input type="number" name="num1" required>
            <label for="">Saisir le deuxieme nombre</label>
            <input type="number" name="num2" required>
            <button type="submit">Soumettre</button>
        </form>
        <?php
            if (isset($_POST['num1']) && isset($_POST['num2'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $max = max(value: $num1, values: $num2) ;
                $ppcm = $max ;
                while ($ppcm % $num1 != 0 || $ppcm % $num2 != 0) {
                    $ppcm += $max ;
                }
                echo`Le PPCM de $num1 et $num2 est $ppcm.` ;
            }
        ?>

    </div>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>