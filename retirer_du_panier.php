<?php
$conn = new mysqli('localhost', 'root', '', 'boutique'); // Ajustez les paramètres si nécessaire

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $article_id = $_POST['article_id'];

    //inpanier2
    $stmt = $conn->prepare("UPDATE articles SET inPanier = inPanier - 1 WHERE id = ? AND inPanier > 0");
    $stmt->bind_param("i", $article_id);
    $stmt->execute();
}


header("Location: panier.php");
exit();

$conn->close();
?>
