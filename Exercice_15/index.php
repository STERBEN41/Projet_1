<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Agence Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1 class="mb-4">Agence Immobilière</h1>

    <form method="post" action="traitement.php" class="card p-4 shadow-sm">

        <p class="mb-3">Que souhaitez-vous faire ?</p>

        <div class="d-flex gap-3">
            <button type="submit" name="action" value="vendre" class="btn btn-danger">
                Vendre
            </button>

            <button type="submit" name="action" value="acheter" class="btn btn-success">
                Acheter
            </button>

            <button type="submit" name="action" value="louer" class="btn btn-primary">
                Louer
            </button>
        </div>

    </form>

</body>
</html>
