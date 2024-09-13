<?php

class Amiibo
{
        private $name;
        private $compatibility;
        private $description;
        private $price;
        private $image;

        public function __construct(string $name, string $compawith)
        {
                $this->name = $name;
                $this->compatibility = $compawith;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription(): string
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription(string $description): self
        {
                $this->description = $description;
                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice(): float 
        {
                return round( $this->price * 1.2, 2);
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice(float $price): self
        {
                $this->price = $price;
                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage(): string
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage(string $image)
        {
                $tab = explode(".", $image);
                $ext = array_pop($tab);
                if ($ext=="png" || $ext=="jpg" || $ext=="jpeg"){
                        $this->image = $image;
                }
                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName(): string
        {
                return $this->name;
        }

        /**
         * Get the value of compatibility
         */ 
        public function getCompatibility(): string
        {
                return $this->compatibility;
        }
}

$archer = new Amiibo("Link [Archer]", "Switch and Switch Lite");
$archer->setDescription("Cette flèche archéonique vous emmènera loin ! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux");
$archer->setPrice(58.25);
$archer->setImage("./asset/amiibo-link-archer_2x.png");


$zelda = new Amiibo("Zelda", "Switch, Wii U, Nintendo DS");
$zelda->setDescription("Ne sous-estimez pas la princesse Zelda ! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux");
$zelda->setPrice(62.41)->setImage("./asset/amiibo-zelda_2x.png");

$rider = new Amiibo("Link [Rider]", "Wii U, Switch, Siwtch Lite");
$rider->setDescription("Il y a des chevaux et puis il y a Epona ! Découvrez vite
        les avantages de cet amiibo compatible avec de multiples jeux");
$rider->setPrice(54.08);
$rider->setImage("./asset/amiibo-link-rider_2x.png");



/*  Q1

    Ecrire une class Tshirt telle que :
    Un Tshirt possède un nom (name), une description (description), un **tableau** de tailles (sizes)
    un prix (price) et une illustration (image).

    Pour créer un nouveau Tshirt, il faudra nécessairement donner un nom.
    L'ensemble des propriétés sera privées et vous définirez pour chacune un getter et un setter.
    Sauf pour la propriété name où vous ne définirez que une méthode getter.

    N'oubliez pas de préciser les types des paramètres ainsi que des valeurs de retour pour les getters.
*/

class TShirt
{
        private $name;
        private $description;
        private $sizes;
        private $price;
        private $image;

        public function __construct(string $name)
        {
                $this->name = $name;
        }

        public function getName(): string
        {
                return $this->name;
        }

        public function getDescription(): ?string
        {
                return $this->description;
        }

        public function setDescription(?string $description): void
        {
                $this->description = $description;
        }

        public function getSizes(): string
        {
                $sizesAsText = "";
                foreach ($this->sizes as $size) {
                        if ($size === end($this->sizes)) {
                                $sizesAsText .= $size;
                        } else {
                                $sizesAsText .= $size . " - ";

                        }
                }
                return $sizesAsText;
        }

        public function setSizes(array $sizes): void
        {
                        
                $this->sizes = $sizes;
        }

        public function getPrice(): ?float
        {
                return $this->price;
        }

        public function setPrice(?float $price): void
        {
                $this->price = $price;
        }

        public function getImage(): ?string
        {
                return $this->image;
        }

        public function setImage(?string $image): void
        {
                $this->image = $image;
        }
}


/*
Instanciez 3 objets Tshirt et placez les dans le tableau $dataTshirt ci après.
Regardez ./asset/objectif.png pour les valeurs à utiliser.
*/   


$dataAmiibo = [$archer, $zelda, $rider];

$tshirt1 = new TShirt("Tshirt Triforce");
$tshirt1->setDescription("60% coton, 40% polyester. Laver à l'eau froide. Ne pas utiliser de javel.");
$tshirt1->setSizes(["S", "M", "L", "XL"]);
$tshirt1->setPrice(29.90);
$tshirt1->setImage("./asset/tshirt-triforce.png");

$tshirt2 = new TShirt("Tshirt Hyrule");
$tshirt2->setDescription("50% coton, 50% polyester. Laver à 30° max.");
$tshirt2->setSizes(["M", "L", "XL", "XXL"]);
$tshirt2->setPrice(24.90);
$tshirt2->setImage("./asset/tshirt-hyrule.png");

$tshirt3 = new TShirt("Tshirt Sheika");
$tshirt3->setDescription("100% synthétique. Laver à 40°. Ne pas utiliser de détachant.");
$tshirt3->setSizes(["XS","S", "XL", "XXL"]);
$tshirt3->setPrice(24.90);
$tshirt3->setImage("./asset/tshirt-sheika.jpg");

$dataTshirt = [$tshirt1, $tshirt2, $tshirt3];

/*  Q3

    De manière analogue au traitement des Amiibos, complétez les fichiers view.php et index.php
    pour effectuer le rendu des Tshirt en plus de celui des Amiibos.
*/

