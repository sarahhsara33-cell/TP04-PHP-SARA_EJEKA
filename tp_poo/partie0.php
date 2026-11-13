<?php
class Voiture {
    public $marque;
    public $couleur ;

    public function setMarque($m) {
        $this->marque = $m;      // $this = l'objet qui appelle la méthode
    }

    public function setcouleur($c) {
        $this->couleur = $c;      
    }


    public function afficher() {
        echo "Marque : " . $this->marque . PHP_EOL ;
        echo "<br>" ;
        echo "Couleur : " . $this->couleur . PHP_EOL;
        echo "<br>";

}
}

$v1 = new Voiture();
$v1->setMarque("Toyota");
$v1->afficher();
$v2 = new Voiture() ;
$v2->setMarque("Renault") ;
$v2->afficher();


?>