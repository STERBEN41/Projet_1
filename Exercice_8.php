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

                $somme = array_sum(array: $notes_array); 
                $nombre_notes = count(value: $notes_array);
                $moyenne = $somme / $nombre_notes;
                $note_max = max(value: $notes_array);
                $note_min = min(value_array: $notes_array);

                echo "<p>Moyenne de la classe : " . number_format(num: $moyenne, decimals: 2) . "</p>";
                echo "<p>Note maximale : " . $note_max . "</p>";
                echo "<p>Note minimale : " . $note_min . "</p>";
            }
        ?>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>