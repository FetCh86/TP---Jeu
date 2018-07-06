<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 06/07/2018
 * Time: 14:18
 */

class Joueur
{
    private $de;
    public $ptsDeVie;
    public $EstVivant;

    /**
     * @return mixed
     */
    public function getPtsDeVie()
    {
        return $this->ptsDeVie;
    }

    /**
     * @param mixed $ptsDeVie
     */
    private function setPtsDeVie($ptsDeVie)
    {
        $this->ptsDeVie = $ptsDeVie;
    }

    /**
     * @return mixed
     */
    public function getEstVivant()
    {
        return $this->EstVivant;
    }


    public function __construct($points)
    {
        $this->ptsDeVie = $points;
        $this->de = new De();
    }

    public function Attaque(MonstreFacile $monstre){
        $lanceJoueur = $this->LanceLeDe();
        $lanceMonstre = $monstre->LanceLeDe();
        if ($lanceJoueur >= $lanceMonstre){
            $monstre->SubitDegats();
        }
    }

    public function LanceLeDe(){
        return $this->de->LanceLeDe();
    }

    public function SubitDegats($degats){
        if (!$this->BouclierFonctionne()){
            $this->ptsDeVie -= $degats;
        }
    }

    private function BouclierFonctionne(){
        return $this->de->LanceLeDe();
    }
}