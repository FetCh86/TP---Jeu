<?php
/**
 * Created by PhpStorm.
 * User: fchou
 * Date: 06/07/2018
 * Time: 15:35
 */

class Program
{
    public function Jeu1()
    {

        $nicolas = new Joueur(150);
        $cptFacile = 0;
        $cptDifficile = 0;

        while ($nicolas->EstVivant) {
            $monstre = self::FabriqueDeMonstre();
            while ($monstre->getEstVivant() && $nicolas->EstVivant) {
                $nicolas->Attaque($monstre);
                if ($monstre->getEstVivant()) {
                    $monstre->Attaque($nicolas);
                }
                if ($nicolas->EstVivant) {
                    if ($monstre instanceof MonstreDifficile) {
                        $cptDifficile++;
                    } else {
                        $cptFacile++;
                    }
                } else {
                    echo 'Snif, vous êtes mort...';
                    break;
                }
            }
            echo "Bravo !! Vous avez tué ", $cptFacile, " monstres facile et ", $cptDifficile, " monstres difficiles. Vous avez ", $nicolas->getPtsDeVie(), " points.";
        }
    }

    /**
     * @return MonstreDifficile|MonstreFacile
     */
    private static function FabriqueDeMonstre(){
        if (rand(1, 6) == 0) {
            return new MonstreFacile();
        }else {
            return new MonstreDifficile();
        }
    }
 }