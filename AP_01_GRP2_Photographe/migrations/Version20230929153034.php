<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230929153034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestations ADD id_prestations_options_id INT NOT NULL');
        $this->addSql('ALTER TABLE prestations ADD CONSTRAINT FK_B338D8D116C60956 FOREIGN KEY (id_prestations_options_id) REFERENCES options (id)');
        $this->addSql('CREATE INDEX IDX_B338D8D116C60956 ON prestations (id_prestations_options_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestations DROP FOREIGN KEY FK_B338D8D116C60956');
        $this->addSql('DROP INDEX IDX_B338D8D116C60956 ON prestations');
        $this->addSql('ALTER TABLE prestations DROP id_prestations_options_id');
    }
}
