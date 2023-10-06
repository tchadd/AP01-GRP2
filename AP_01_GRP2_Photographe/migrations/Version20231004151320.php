<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231004151320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE options ADD id_prestations_options_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE options ADD CONSTRAINT FK_D035FA8716C60956 FOREIGN KEY (id_prestations_options_id) REFERENCES prestations (id)');
        $this->addSql('CREATE INDEX IDX_D035FA8716C60956 ON options (id_prestations_options_id)');
        $this->addSql('ALTER TABLE prestations ADD id_presta_option_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE prestations ADD CONSTRAINT FK_B338D8D1CE0910D9 FOREIGN KEY (id_presta_option_id) REFERENCES options (id)');
        $this->addSql('CREATE INDEX IDX_B338D8D1CE0910D9 ON prestations (id_presta_option_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE options DROP FOREIGN KEY FK_D035FA8716C60956');
        $this->addSql('DROP INDEX IDX_D035FA8716C60956 ON options');
        $this->addSql('ALTER TABLE options DROP id_prestations_options_id');
        $this->addSql('ALTER TABLE prestations DROP FOREIGN KEY FK_B338D8D1CE0910D9');
        $this->addSql('DROP INDEX IDX_B338D8D1CE0910D9 ON prestations');
        $this->addSql('ALTER TABLE prestations DROP id_presta_option_id');
    }
}
