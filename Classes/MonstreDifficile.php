<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 06/07/2018
 * Time: 14:16
 */

class MonstreDifficile extends MonstreFacile
{
    const DEGATS_SORTS = 5;

    public function Attaque(Joueur $joueur)
    {
        parent::Attaque($joueur); // TODO: Change the autogenerated stub
        $joueur.$this->SubitDegats(SortMagique());
    }

    private function SortMagique(){
        $valeur = $de->LanceLeDe();
        if ($valeur == 6){
            return 0;
        }
        return self::DEGATS_SORTS * valeur;
    }
}