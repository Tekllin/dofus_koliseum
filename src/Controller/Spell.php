<?php

namespace tekllin\Controller;

class Spell {

    private $name;
    private $spellDamage;
    private $type;
    private $spellCost;
    private $spellEffect;
    private $spellEffectDuration;
    private $spellEffectDamage;
    private $spellEffectType;
    private $spellEffectBoost;
    private $spellEffectBoostDuration;
    private $spellCrit;
    private $cooldown; 
    private $nb_lancer;
    

    public function __construct(){
        $this->name = $name;
        $this->spellDamage = $spellDamage;
        $this->type = $type;
        $this->spellCost = $spellCost;
        $this->spellEffect = $spellEffect;
        $this->spellEffectDuration = $spellEffectDuration;
        $this->spellEffectDamage = $spellEffectDamage;
        $this->spellEffectType = $spellEffectType;
        $this->spellEffectBoost = $spellEffectBoost;
        $this->spellEffectBoostDuration = $spellEffectBoostDuration;
        $this->spellCrit = $spellCrit;
        $this->cooldown = $cooldown;
        $this->nb_lancer = $nb_lancer; 
    }





}