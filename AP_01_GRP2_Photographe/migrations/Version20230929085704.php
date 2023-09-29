<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929085704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE demande_de_contacts (id INT AUTO_INCREMENT NOT NULL, description_demande VARCHAR(255) NOT NULL, objet_demande VARCHAR(255) NOT NULL, date_demande VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, nom_utilisateur VARCHAR(255) NOT NULL, prenom_utilisateur VARCHAR(255) NOT NULL, cp_utilisateur INT NOT NULL, ville_utilisateur VARCHAR(255) NOT NULL, adresse_utilisateur VARCHAR(255) NOT NULL, telephone_utilisateur INT NOT NULL, mail_utilisateur VARCHAR(255) NOT NULL, motdepasse_utilisateur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE demande_de_contacts');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
