<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240130081409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE style style VARCHAR(255) DEFAULT NULL, CHANGE nom_du_groupe nom_du_groupe VARCHAR(255) DEFAULT NULL, CHANGE style_de_musique style_de_musique VARCHAR(255) DEFAULT NULL, CHANGE nom_entreprise nom_entreprise VARCHAR(255) DEFAULT NULL, CHANGE pro_ou_amateur pro_ou_amateur VARCHAR(255) DEFAULT NULL, CHANGE pays pays VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE style style VARCHAR(255) NOT NULL, CHANGE nom_du_groupe nom_du_groupe VARCHAR(255) NOT NULL, CHANGE style_de_musique style_de_musique VARCHAR(255) NOT NULL, CHANGE nom_entreprise nom_entreprise VARCHAR(255) NOT NULL, CHANGE pro_ou_amateur pro_ou_amateur VARCHAR(255) NOT NULL, CHANGE pays pays VARCHAR(255) NOT NULL');
    }
}
