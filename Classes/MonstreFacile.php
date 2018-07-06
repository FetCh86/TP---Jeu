<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 06/07/2018
 * Time: 14:16
 */

class MonstreFacile
{
    const DEGATS = 10;
    private $de;
    private $EstVivant;


    public function __construct()
    {
        $this->de = new De();
        $this->EstVivant = true;
    }

    /**
     * @return bool
     */
    public function getEstVivant()
    {
        return $this->EstVivant;
    }

    /**
     * @param bool $EstVivant
     */
    private function setEstVivant($EstVivant)
    {
        $this->EstVivant = $EstVivant;
    }


    public function Attaque(Joueur $joueur){
        $lanceMonstre = $this->LanceLeDe();
        $lanceJoueur = $joueur.LanceLeDe();
        if ($lanceMonstre > $lanceJoueur){
            $joueur.$this->SubitDegats();
        }
    }

    public function SubitDegats(){
        $this->EstVivant = false;
    }

    public function LanceLeDe(){
           $this->de->LanceLeDe();
    }
}