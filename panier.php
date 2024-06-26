<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'boutique'); // Ajustez les paramètres si nécessaire

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des articles dans le panier
$result = $conn->query("SELECT * FROM articles WHERE inPanier > 0");

$totalPrice = 0;
?>


<?php
include ("header.php");
?>

<body>

    <h1 class="titrepage">Votre Panier</h1>

    <div class="articlelist">
        <?php if ($result->num_rows > 0) : ?>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <?php $totalPrice += $row['prix'] * $row['inPanier']; ?>

                <div class="article">
                    <h2><?= htmlspecialchars($row['nom']) ?></h2>
                    <img class="motomoto" src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['nom']) ?>">
                    <div class="chiffre">
                        <span class="quantite">Quantité: <?= $row['inPanier'] ?></span>
                        <span class="prix"><?= number_format($row['prix'] * $row['inPanier'], 2, ',', ' ') ?>€</span>
                    </div>
                    <form method="POST" action="retirer_du_panier.php">
                            <input type="hidden" name="article_id" value="<?= $row['id'] ?>">
                            <button type="submit" class="retirerdupanier">Retirer du panier</button>
                        </form>
                </div>

            <?php endwhile; ?>
        <?php else : ?>
            <p>Votre panier est vide.</p>
        <?php endif; ?>
    </div>

    <a href="index.php">
        <img class="bouttonPanier" src="images moto/panier.png" alt="Panier">
    </a>
    
    <div class="totalPrix">
        <h3>Total: <?= number_format($totalPrice, 2, ',', ' ') ?>€</h3>
        <a href="https://www.youtube.com/watch?v=ag1frmlUuf8" class="payement" target="_blank">Commander</a>
    </div>

</body>

</html>

<?php
// Fermez la connexion à la base de données
$conn->close();
?>
