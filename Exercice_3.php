<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>TIRAGE</title>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <a href="index.html"> Acceuil </a>
        <a href="Exercice_1.php"> Programme Panlidrome </a>
        <a href="Exercice_2.php"> Programme Multiple </a>
        <a href="Exercice_4.php"> Programme Compteur </a>
        <a href="Exercice_5.php"> Programme PPCM </a>
        <a href="Exercice_6.php"> Programme Cercle</a>
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