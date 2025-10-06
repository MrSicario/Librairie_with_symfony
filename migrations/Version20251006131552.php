<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251006131552 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande ADD type VARCHAR(50) NOT NULL, ADD nom_eleve VARCHAR(255) NOT NULL, ADD email_eleve VARCHAR(255) NOT NULL, DROP type_pret_ou_don, DROP nom, DROP email');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande ADD type_pret_ou_don VARCHAR(225) NOT NULL, ADD nom VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, DROP type, DROP nom_eleve, DROP email_eleve');
    }
}
