<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'boutique'); // Ajustez les paramètres si nécessaire

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des articles depuis la base de données
$result = $conn->query("SELECT * FROM articles");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vente</title>
    <link rel="stylesheet" href="styleindex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Angkor&family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <script src="index.js" defer></script>
</head>

<body>

    <h1 class="titrepage">Notre Boulangerie</h1>

    <a href="panier.php">
        <img class="bouttonPanier" src="images moto/panier.png" alt="Panier">
    </a>

    <div class="articlelist">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <div class="article">
                <h2><?= htmlspecialchars($row['nom']) ?></h2>
                <img class="motomoto" src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['nom']) ?>">
                <span class="description"><?= htmlspecialchars($row['description']) ?></span>
                <div class="chiffre">
                    <form method="POST" action="ajouter_au_panier.php">
                        <input type="hidden" name="article_id" value="<?= $row['id'] ?>">
                        <button type="submit" class="ajouteraupanier">Ajouter au panier</button>
                    </form>
                    <span class="prix"><?= number_format($row['prix'], 2, ',', ' ') ?>€</span>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

</body>

</html>

<?php
// Fermez la connexion à la base de données
$conn->close();
?>
