<?php 

class Player {
    private $pseudo;
    private $classe;
    private $lvl;
    private $vie;
    private $maxVie;
    private $x;
    private $y;
    private $maxMapX;
    private $maxMapY;
    private $pM;
    private $pA;
    private $pO;
    public $intelligence;
    public $force;
    public $agilite;
    public $chance;
    public $neutre;
    public $dommage_feu;
    public $dommage_eau;
    public $dommage_air;
    public $dommage_terre;
    public $dommage_neutre;
    public $resistance_feu;
    public $resistance_eau;
    public $resistance_air;
    public $resistance_terre;
    public $resistance_neutre;
    public $resistance_fixe_feu;
    public $resistance_fixe_eau;
    public $resistance_fixe_air;
    public $resistance_fixe_terre;
    public $resistance_fixe_neutre;
    public $tacle;
    public $fuite;
    public $soin;
    public $puissance;
    public $tx_crit;
    public $dommage_crit;
    public $items; //array


    
    public function __construct($pseudo, $classe, $lvl, $maxVie, $x, $y){
        $this->pseudo = $pseudo;
        $this->classe = $classe;
        $this->lvl = $this->setLevel($lvl);
        $this->vie = $vie;
        $this->maxVie = $maxVie;
        $this->x = $x;
        $this->y = $y;
        $this->maxMapX;
        $this->maxMapY;
        $this->pM = $pM;
        $this->pA = $pA;
        $this->pO = $pO;
        $this->intelligence = $intelligence;
        $this->force = $force;
        $this->agilite = $agilite;
        $this->chance = $chance;
        $this->neutre = $neutre;
        $this->dommage_feu = $dommage_feu;
        $this->dommage_eau = $dommage_eau;
        $this->dommage_air = $dommage_air;
        $this->dommage_terre = $dommage_terre;
        $this->dommage_neutre = $dommage_neutre;
        $this->resistance_feu = $resistance_feu;
        $this->resistance_eau = $resistance_eau;
        $this->resistance_air = $resistance_air;
        $this->resistance_terre = $resistance_terre;
        $this->resistance_neutre = $resistance_neutre;
        $this->resistance_fixe_feu = $resistance_fixe_feu;
        $this->resistance_fixe_eau = $resistance_fixe_eau;
        $this->resistance_fixe_air = $resistance_fixe_air;
        $this->resistance_fixe_terre = $resistance_fixe_terre;
        $this->resistance_fixe_neutre = $resistance_fixe_neutre;
        $this->tacle = $tacle;
        $this->fuite = $fuite;
        $this->soin = $soin;
        $this->puissance = $puissance;
        $this->tx_crit = $tx_crit;
        $this->dommage_crit = $dommage_crit;
        $this->items = $items; //array



    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function getPos(){
        return array($this->y, $this->x);
    }

    public function setMaxMap($y,$x){
        $this->maxMapX = $x;
        $this->maxMapY = $y;
    }  

    public function setLevel($lvl){
        if($lvl > 200){
            $lvl = 200;
        }
        if($lvl < 0){
            $lvl = 0;
        }
        $this->lvl = $lvl;
    }

    public function setMaxVie($vie){
        $this->vie = $vie;
    }

    public function setPM($pM){
        $this->pM = $pM;
    }

    public function setPA($pA){
        if($pA > 12){
            $pA = 12;
        }
        $this->pA = $pA;
    }

    public function setPO($pO){
        $this->pO = $pO;
    }

    public function setIntelligence($intelligence){
        $this->intelligence = $intelligence;
    }

    public function setForce($force){
        $this->force = $force;
    }

    public function setAgilite($agilite){
        $this->agilite = $agilite;
    }

    public function setChance($chance){
        $this->chance = $chance;
    }

    public function setNeutre($neutre){
        $neutre = $force;
        $this->neutre = $neutre;
    }

    public function setDommageFeu($dommage_feu){
        $this->dommage_feu = $dommage_feu;
    }

    public function setDommageEau($dommage_eau){
        $this->dommage_eau = $dommage_eau;
    }

    public function setDommageAir($dommage_air){
        $this->dommage_air = $dommage_air;
    }

    public function setDommageTerre($dommage_terre){
        $this->dommage_terre = $dommage_terre;
    }

    public function setDommageNeutre($dommage_neutre){
        $this->dommage_neutre = $dommage_neutre;
    }

    public function setResistanceFeu($resistance_feu){
        $this->resistance_feu = $resistance_feu;
    }

    public function setResistanceEau($resistance_eau){
        $this->resistance_eau = $resistance_eau;
    }

    public function setResistanceAir($resistance_air){
        $this->resistance_air = $resistance_air;
    }

    public function setResistanceTerre($resistance_terre){
        $this->resistance_terre = $resistance_terre;
    }

    public function setResistanceNeutre($resistance_neutre){
        $this->resistance_neutre = $resistance_neutre;
    }

    public function setResistanceFixeFeu($resistance_fixe_feu){
        $this->resistance_fixe_feu = $resistance_fixe_feu;
    }

    public function setResistanceFixeEau($resistance_fixe_eau){
        $this->resistance_fixe_eau = $resistance_fixe_eau;
    }

    public function setResistanceFixeAir($resistance_fixe_air){
        $this->resistance_fixe_air = $resistance_fixe_air;
    }

    public function setResistanceFixeTerre($resistance_fixe_terre){
        $this->resistance_fixe_terre = $resistance_fixe_terre;
    }   

    public function setResistanceFixeNeutre($resistance_fixe_neutre){
        $this->resistance_fixe_neutre = $resistance_fixe_neutre;
    }

    public function setTacle($tacle){
        $this->tacle = $tacle;
    }

    public function setFuite($fuite){
        $this->fuite = $fuite;
    }

    public function setSoin($soin){
        $this->soin = $soin;
    }

    public function setPuissance($puissance){
        $this->puissance = $puissance;
    }

    public function setTxCrit($tx_crit){
        $this->tx_crit = $tx_crit;
    }

    public function setDommageCrit($dommage_crit){
        $this->dommage_crit = $dommage_crit;
    }

    public function setItems($items){
        $this->items = $items; //array
    }
}