<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <a href="index.html"> Acceuil </a>
        <a href="Exercice_2.php"> Programme Multiple </a>
        <a href="Exercice_3.php"> Programme Tirage </a>
        <a href="Exercice_4.php"> Programme Compteur </a>
        <a href="Exercice_5.php"> Programme PPCM </a>
        <a href="Exercice_6.php"> Programme Cercle</a>
    </div>
    <!-- Main Content Section -->
    <div class="main-content"> 
        <h1>Programme Nombre parfait</h1>
        <p> Ici vous trouverez mon programme qui permet de déterminer si un 
            nombre est un nombre parfait ou non. Un nombre parfait est un nombre 
            entier positif qui est égal à la somme de ses diviseurs propres 
            (excluant le nombre lui-même). Par exemple, 6 est un nombre parfait 
            car ses diviseurs propres sont 1, 2 et 3, et 1 + 2 + 3 = 6.
        </p>
        <form method="post" action="">
            <input type="number" name="num" placeholder="Saisir un nombre" required>
            <button type="submit">Vérifier</button>
        </form>
        <?php
            if (isset($_POST['num'])) { // Vérifie si le nombre est soumis
                $num = $_POST['num']; // Récupère le nombre saisi
                $somme = 0;
                for ($i = 1; $i <= $num / 2; $i++) {
                    if ($num % $i == 0) {
                        $somme += $i;
                    }
                }
                if ($somme == $num) {
                    echo "<p>Le nombre $num est un nombre parfait.</p>";
                } else {
                    echo "<p>Le nombre $num n'est pas un nombre parfait.</p>";
                }
            }
        ?>

    </div>
    
    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>