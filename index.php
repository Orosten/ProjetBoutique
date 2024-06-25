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

        <div class="article">
            <h2>Baguette de pain</h2>
            <img class="motomoto" src="images moto/baguette.jpg" alt="Baguette de pain">
            <span class="description">Ce genre de baguette de pain qui permet de faire des sandwich tah les merguez sauce barbecue</span>
            <div class="chiffre">
                <button class="ajouteraupanier">Ajouter au panier</button>
                <span class="prix" data-set="1.20">1,20€</span>
            </div>
        </div>

        <div class="article">
            <h2>Pain au chocolat</h2>
            <img class="motomoto" src="images moto/painauchocolat.jpg" alt="Pain au chocolat">
            <span class="description">avec un chocolat chaud c'est bon le matin.</span>
            <div class="chiffre">
                <button class="ajouteraupanier">Ajouter au panier</button>
                <span class="prix" data-set="1.50">1,50€</span>
            </div>
        </div>

        <div class="article">
            <h2>Croissant</h2>
            <img class="motomoto" src="images moto/croissant.webp" alt="Croissant">
            <span class="description">Ce genre de croissant bien fondant miam miam</span>
            <div class="chiffre">
                <button class="ajouteraupanier">Ajouter au panier</button>
                <span class="prix" data-set="1.00">1,00€</span>
            </div>
        </div>

        <div class="article">
            <h2>Chouquettes</h2>
            <img class="motomoto" src="images moto/chouquette.jpeg" alt="Chouquettes">
            <span class="description">De magnifiques chouquettes vendues par 100g. Attention elles sont délicieuses, miam miam.</span>
            <div class="chiffre">
                <button class="ajouteraupanier">Ajouter au panier</button>
                <span class="prix" data-set="3.99">3,99€</span>
            </div>
        </div>

    </div>

</body>

</html>
