<?php

namespace App\entities;
class Panier
{
    private array $lignes =[];

    public function ajouterProduit(Produit $produit, int $quantite){

        $ligne=$this->lignes[$produit->getId()]?? null;
        if ($ligne===null){

            $ligne=new LignePanier($produit,0);
            $this->lignes[$produit->getId()]=$ligne;

        }

        $ligne->incrementerQuantite($quantite);
        return $ligne;
    }


    public function getQuantiteTotale(){
        $i=0;
        foreach ($this->lignes as $Quantity){
            $i+=$Quantity->getQuantite();

        }
        return $i;
    }

    public function getTotal(){
        $i=0;
        foreach ($this->lignes as $PrixTotal){
            $i+=($PrixTotal->getProduit()->getPrix())*$PrixTotal->getQuantite();

        }
        return $i;
    }

    public function supprimerProduit(Produit $produit){
        $ligne=$this->lignes[$produit->getId()]?? null;
        if ($ligne!==null){

            $produit->setQuantite($produit->getQuantite()+$ligne->getQuantite());

        }

        unset($produit);

    }

    public function afficher(){

    }


}