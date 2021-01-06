<?php


namespace App\entities;


use App\entities\Produit;
class LignePanier
{
    private Produit $produit;
    private int $quantite;

    /**
     * @return \App\entities\Produit
     */
    public function getProduit(): \App\entities\Produit
    {
        return $this->produit;
    }

    /**
     * @param \App\entities\Produit $produit
     */
    public function setProduit(\App\entities\Produit $produit): void
    {
        $this->produit = $produit;
    }


    /**
     * @return int
     */
    public function getQuantite(): int
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }

    /**
     * LignePanier constructor.
     * @param Produit $produit
     * @param int $quantite
     */
    public function __construct(Produit $produit, int $quantite)
    {
        $this->produit = $produit;
        $this->quantite = $quantite;
    }

    public function incrementerQuantite($quantite=1){

        if ($quantite<=$this->produit->getQuantite()){
            $this->quantite+=$quantite;
            $this->produit->setQuantite($this->getProduit()->getQuantite()-$quantite);
        }
    }

}