// index.js

// Fonction pour ajouter des articles au panier
function addpanier(item) {
    let panier = JSON.parse(localStorage.getItem('panier')) || [];
    panier.push(item);
    localStorage.setItem('panier', JSON.stringify(panier));
    alert("Article ajouté au panier !");
}

// Exemple d'éléments à ajouter
document.querySelectorAll('.ajouteraupanier').forEach((button, index) => {
    button.addEventListener('click', () => {
        const article = document.querySelectorAll('.article')[index];
        const item = {
            name: article.querySelector('h2').innerText,
            price: article.querySelector('.prix').innerText,
            image: article.querySelector('img').src
        };
        addpanier(item);
    });
});
