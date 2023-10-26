<?php 

namespace tekllin\Controller;

class Damage {

    private $element;
    private $dommage_sort;
    private $dommage_crit_sort;
    private $puissance;
    private $dommage_fixe;
    private $resistance;
    private $resistance_fixe;
    private $dommage_crit;
    private $tx_crit;
    private $tx_crit_sort;
    private $degats_finaux;
    

    public function __construct() {
        $this->element = $element;
        $this->stat = $stat;
        $this->puissance = $puissance;  
        $this->dommage_fixe = $dommage_fixe;
        $this->resistance = $resistance;
        $this->resistance_fixe = $resistance_fixe;  
        $this->dommage_crit = $dommage_crit;
        $this->tx_crit = $tx_crit;
        $this->tx_crit_sort = $tx_crit_sort;
        $this->degats_finaux = $degats_finaux;
        
    }

    public function setElement() {
        return $this->element;
    }

    public function setStat() {
        return $this->$stat;
    }

    public function setPuissance() {
        return $this->$puissance;
    }

    public function setDommageFixe() {
        return $this->$dommage_fixe;
    }

    public function setResistance($resistance) {
        if($resistance > 50) {
            $resistance = 50;
        }
        return $this->$resistance;
    }

    public function setResistanceFixe() {
        return $this->$resistance_fixe;
    }

    public function setDommageCrit() {
        return $this->$dommage_crit;
    }

    public function setTxCrit() {
        return $this->$tx_crit;
    }

    public function setTxCritSort() {
        return $this->$tx_crit_sort;
    }

    public function setDegatsFinaux() {
        
        //  dommage_fixe + (puissance + stat / 100) * dommage sort 
        //  dommage infligés = degatsFinaux - (degatsFinaux - res_fixe) * (res / 100)
    }

    
    



}