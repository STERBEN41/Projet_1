<?php
if (isset($_POST['action'])) {

    switch ($_POST['action']) {

        case 'vendre':
            header('Location: vendre.php');
            break;

        case 'acheter':
            header('Location: acheter.php');
            break;

        case 'louer':
            header('Location: louer.php');
            break;

        default:
            echo "Choix invalide.";
    }

    exit;
}
?>
