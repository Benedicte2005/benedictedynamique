<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue sur la page d'accueil</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        echo "<p>Nom d'utilisateur: $username</p>";
    } else {
        echo "<p>Aucun utilisateur connecté.</p>";
    }
    ?>
    
    <a href="login.php">Se déconnecter</a>
</body>
</html>
