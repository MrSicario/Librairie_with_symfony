<?php

namespace App\DataFixtures;

use App\Entity\Livre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $livres = [
            ['Mathématiques Terminale S', 'Terminale S', 'Neuf', 'Paris'],
            ['Physique-Chimie 1ère', 'Première', 'Bon état', 'Lyon'],
            ['Histoire-Géographie 3ème', 'Troisième', 'Usagé', 'Marseille'],
            ['Français Seconde', 'Seconde', 'Neuf', 'Toulouse'],
            ['SVT Terminale', 'Terminale', 'Bon état', 'Paris'],
            ['Philosophie Terminale', 'Terminale', 'Neuf', 'Lille'],
            ['Anglais 4ème', 'Quatrième', 'Bon état', 'Bordeaux'],
            ['Espagnol 2nde', 'Seconde', 'Usagé', 'Nice'],
            ['Sciences Eco 1ère', 'Première', 'Neuf', 'Nantes'],
            ['Technologie 5ème', 'Cinquième', 'Bon état', 'Strasbourg'],
        ];

        foreach ($livres as $livreData) {
            $livre = new Livre();
            $livre->setTitre($livreData[0]);
            $livre->setClasse($livreData[1]);
            $livre->setEtat($livreData[2]);
            $livre->setVille($livreData[3]);
            
            $manager->persist($livre);
        }

        $manager->flush();
    }
}