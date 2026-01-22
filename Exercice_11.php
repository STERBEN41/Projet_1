<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>Programme de Formulaire</title>
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
        <h1>Programme de Formulaire</h1>
        <p>un formulaire comprenant un groupe de champs ayant pour titre "Adresse client".
            Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du code postal.
            Les données sont ensuite traitées par un fichier PHP séparé récupérant les données et les affichant dans un
            tableau XHTML.</p>

        <!-- <form action="traitement.php" method="post">
            <fieldset> 
                <legend>Adresse client</legend>
                <label for="nom">Nom:</label>
                <input type="text" name="nom" required><br><br>
                <label for="prenom">Prénom:</label>
                <input type="text" name="prenom" required><br><br>
                <label for="adresse">Adresse:</label>
                <input type="text" name="adresse" required><br><br>
                <label for="ville">Ville:</label>
                <input type="text" name="ville" required><br><br>
                <label for="code_postal">Code Postal:</label>
                <input type="text" name="code_postal" required><br><br>
                <input type="submit" value="Envoyer">
            </fieldset>
        </form> -->
        
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Ville</label>
                <input type="text" name="ville" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Code Postal</label>
                <input type="text" name="code_postal" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary" >Soumettre</button>
        </form>
        <br> <br>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nom = htmlspecialchars($_POST['nom']); // Sécurisation des données
                $prenom = htmlspecialchars($_POST['prenom']);
                $adresse = htmlspecialchars($_POST['adresse']);
                $ville = htmlspecialchars($_POST['ville']);
                $code_postal = htmlspecialchars($_POST['code_postal']);   
            }
        ?>

        <?php if(!empty($_POST)) { ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Code Postal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> <?= $nom ?> </th>
                    <th> <?= $prenom ?> </th>
                    <th> <?= $adresse ?> </th>
                    <th> <?= $ville ?> </th>
                    <th> <?= $code_postal ?> </th>
                </tr>
            </tbody>
        </table> 
        <?php } ?>

    </div>

    <!-- Footer Section -->
    <div class="footer">
        
        <p>&copy; 2026 My Project. All rights reserved.</p>

    </div>

</body>
</html>