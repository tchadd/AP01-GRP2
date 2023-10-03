<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929145637 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_de_contacts ADD id_utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande_de_contacts ADD CONSTRAINT FK_E6EA80ABC6EE5C49 FOREIGN KEY (id_utilisateur_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE INDEX IDX_E6EA80ABC6EE5C49 ON demande_de_contacts (id_utilisateur_id)');
        $this->addSql('ALTER TABLE utilisateurs ADD id_demande_utilisateurs_id INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315E972BC1C8 FOREIGN KEY (id_demande_utilisateurs_id) REFERENCES utilisateurs (id)');
        $this->addSql('CREATE INDEX IDX_497B315E972BC1C8 ON utilisateurs (id_demande_utilisateurs_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_de_contacts DROP FOREIGN KEY FK_E6EA80ABC6EE5C49');
        $this->addSql('DROP INDEX IDX_E6EA80ABC6EE5C49 ON demande_de_contacts');
        $this->addSql('ALTER TABLE demande_de_contacts DROP id_utilisateur_id');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315E972BC1C8');
        $this->addSql('DROP INDEX IDX_497B315E972BC1C8 ON utilisateurs');
        $this->addSql('ALTER TABLE utilisateurs DROP id_demande_utilisateurs_id');
    }
}
