<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>CERCLE</title>
</head>
<body>

<!-- Header Section -->
    <div class="header">
        <a href="index.html"> Acceuil </a>
        <a href="Exercice_1.php"> Programme Panlidrome </a>
        <a href="Exercice_2.php"> Programme Multiple </a>
        <a href="Exercice_3.php"> Programme Tirage </a>
        <a href="Exercice_4.php"> Programme Compteur </a>
        <a href="Exercice_5.php"> Programme PPCM </a>
    </div>

    <!-- Main Content Section -->
    <div class="main-content"> 
        
    <h1>Programme calcule cercle</h1>
    <p>Programme de calcule des paramètres d'un cercle à partir du rayon qui sera saisi par l'utilisateur</p>
    <form action="">
        <label for="">Enrer le rayon</label>
        <input type="num" name="rayon" required>
        <button type="submit">Soumettre</button>
    </form>
    
    <?php
        if (isset($_GET['rayon'])){
            $rayon = $_GET['rayon'];
            $diametre = 2 * $rayon ;
            $circonference = 2 * pi() * $rayon ;
            $aire = pi() * ($rayon ** 2) ; ?>
            <p> <?php echo "Pour un cercle de rayon $rayon :" ?> </p>
            <ul>
                <li> <?php echo "Le diamètre est de : $diametre" ; ?> </li>
                <li> <?php echo "La circonférence est de : $circonference" ; ?> </li>
                <li> <?php echo "L'aire est de : $aire" ; ?> </li>
            </ul>
    <?php
        }
    ?>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>