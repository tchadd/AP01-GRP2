<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231006124720 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0259F1BC6');
        $this->addSql('ALTER TABLE demande_de_contacts DROP FOREIGN KEY FK_E6EA80ABC6EE5C49');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315E972BC1C8');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315E2A4C59FF');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('DROP INDEX IDX_8F91ABF0259F1BC6 ON avis');
        $this->addSql('ALTER TABLE avis DROP id_utilisateur_avis_id');
        $this->addSql('DROP INDEX IDX_E6EA80ABC6EE5C49 ON demande_de_contacts');
        $this->addSql('ALTER TABLE demande_de_contacts DROP id_utilisateur_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, id_demande_utilisateurs_id INT NOT NULL, id_utilisateur_roles_id INT DEFAULT NULL, nom_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prenom_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, cp_utilisateur INT NOT NULL, ville_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, adresse_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, telephone_utilisateur INT NOT NULL, mail_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, motdepasse_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, id_utilisateur_role VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, id_role_utilisateur INT NOT NULL, INDEX IDX_497B315E2A4C59FF (id_utilisateur_roles_id), INDEX IDX_497B315E972BC1C8 (id_demande_utilisateurs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315E972BC1C8 FOREIGN KEY (id_demande_utilisateurs_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315E2A4C59FF FOREIGN KEY (id_utilisateur_roles_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE avis ADD id_utilisateur_avis_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0259F1BC6 FOREIGN KEY (id_utilisateur_avis_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF0259F1BC6 ON avis (id_utilisateur_avis_id)');
        $this->addSql('ALTER TABLE demande_de_contacts ADD id_utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_de_contacts ADD CONSTRAINT FK_E6EA80ABC6EE5C49 FOREIGN KEY (id_utilisateur_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE INDEX IDX_E6EA80ABC6EE5C49 ON demande_de_contacts (id_utilisateur_id)');
    }
}
