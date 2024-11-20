
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// Affichez les liens vers create.php, read.php, update.php, delete.php, search.php ici.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration</title>
</head>
<body>
<h1>Zone d'administration</h1>
<ul>
    <li><a href="create.php">Ajouter une information</a></li>
    <li><a href="read.php">Afficher les informations</a></li>
    <li><a href="update.php">Modifier une information</a></li>
    <li><a href="delete.php">Supprimer une information</a></li>
    <li><a href="search.php">Rechercher des informations</a></li>
</ul>
</body>
</html>


