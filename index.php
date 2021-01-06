<?php
require __DIR__ . "/vendor/autoload.php";

use App\entities\Produit;
use App\entities\Panier;
use App\entities\LignePanier;

$produit1 = new Produit(1, "iPhone 11", 1400, 10);
$produit2 = new Produit(2, "M2 SSD", 400, 4);

$panier = new Panier();

$lignePanier1 = $panier->ajouterProduit($produit1, 1);
$lignePanier2 = $produit2->ajouterPanier($panier, 2);

echo $produit1  . PHP_EOL;  // Doit afficher 1;iPhone 11;1400;9

echo $produit2 . PHP_EOL;  // Doit afficher 2;M2 SSD;400;2

echo "Nombre de produits dans le panier: " . PHP_EOL; echo $panier->getQuantiteTotale() . PHP_EOL; // Doit afficher 3

echo "Prix total des produits dans le panier: " . PHP_EOL; echo $panier->getTotal() . PHP_EOL; // Doit afficher 2200

$lignePanier1->incrementerQuantite();
$lignePanier2->incrementerQuantite(3);

echo $produit1 . PHP_EOL;  // Doit afficher 1;iPhone 11;1400;8
echo $produit2 . PHP_EOL;  // Doit afficher 2;M2 SSD;400;2

echo "Nombre de produits dans le panier: " . PHP_EOL;
echo $panier->getQuantiteTotale() . PHP_EOL; // Doit afficher 4

echo "Prix total des produits dans le panier: " . PHP_EOL;
echo $panier->getTotal() . PHP_EOL; // Doit afficher 3600

$panier->supprimerProduit($produit1);
echo "Nombre de produits dans le panier: " . PHP_EOL;
echo $panier->getQuantiteTotale() . PHP_EOL; // Doit afficher 2

echo $produit1  . PHP_EOL ; // Doit afficher 1;iPhone 11;1400;10
echo $produit2  . PHP_EOL ; // Doit afficher 2;M2 SSD;400;2

$lignePanier2 = $produit1->ajouterPanier($panier, 3);
echo $panier->afficher();


