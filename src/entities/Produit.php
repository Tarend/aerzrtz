<?php

namespace App\entities;
class Produit
{
    private int $id ;
    private string $libelle ;
    private float $prix ;
    private int $quantite;

    /**
     * Produit constructor.
     * @param int $id
     * @param string $libelle
     * @param float $prix
     * @param int $quantite
     */
    public function __construct(int $id, string $libelle, float $prix, int $quantite)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * @return int
     */
    public function getQuantite(): int
    {
        return $this->quantite;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }

    public function __toString()
    {
        return $this->id . " " . $this->libelle . " " . $this->prix . " " . $this->quantite;
    }

    public function ajouterPanier(Panier $panier, int $quantite){

       return $panier->ajouterProduit($this,$quantite);

    }
}