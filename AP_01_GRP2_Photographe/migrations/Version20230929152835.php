<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929152835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateurs ADD id_utilisateur_roles_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315E2A4C59FF FOREIGN KEY (id_utilisateur_roles_id) REFERENCES role (id)');
        $this->addSql('CREATE INDEX IDX_497B315E2A4C59FF ON utilisateurs (id_utilisateur_roles_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315E2A4C59FF');
        $this->addSql('DROP INDEX IDX_497B315E2A4C59FF ON utilisateurs');
        $this->addSql('ALTER TABLE utilisateurs DROP id_utilisateur_roles_id');
    }
}
