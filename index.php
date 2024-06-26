<?php
$conn = new mysqli('localhost', 'root', '', 'boutique'); // Ajustez les paramètres si nécessaire

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM articles");
?>
<?php
include ("header.php");
?>

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
$conn->close();
?>
