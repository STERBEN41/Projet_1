<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>Programme Tableau multidimensionnel</title>
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
            </ul>
        </li>
    </ul>
    </div>

    <!-- Main Content Section -->
    <div class="main-content"> 

        <h1>Programme Tableau multidimensionnel</h1>
        <p>Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs
            des tableaux associatifs dont les clés sont le prénom, la ville de résidence et l’âge de la personne avec
            une série de valeurs associées.
        </p>
        <?php
         $person = array(
            "Personnes" => array(
                "Noms" => array("Alice", "Bob", "Charlie"),
                "Prenom" => array("Dupont", "Martin", "Durand"),
                "Ville" => array("Paris", "Lyon", "Marseille"),
                "Age" => array(25, 30, 35)
            ),
         );

        //  var_dump($person['Personnes']["Noms"][2]);
        //  var_dump($person['Personnes']["Prenom"][1]);

        ?>

        <table class="table table-primary">
            <td  scope="col">Noms</td>
            <td  scope="col">Prenom</td>
            <td  scope="col">Ville</td>
            <td  scope="col">Age</td>
            <?php for ($i = 0; $i < count($person['Personnes']["Noms"]); $i++) { ?>
                <tr>
                    <td scope="row"><?= $person['Personnes']["Noms"][$i]; ?></td>
                    <td scope="row"><?= $person['Personnes']["Prenom"][$i]; ?></td>
                    <td scope="row"><?= $person['Personnes']["Ville"][$i]; ?></td>
                    <td scope="row"><?= $person['Personnes']["Age"][$i]; ?></td>
                </tr>
            <?php } ?>
        </table>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>