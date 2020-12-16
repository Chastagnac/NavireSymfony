<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216155454 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(60) NOT NULL, indicatif VARCHAR(3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE navire ADD le_pavillon_id INT NOT NULL');
        $this->addSql('ALTER TABLE navire ADD CONSTRAINT FK_EED1038CC0162BF FOREIGN KEY (le_pavillon_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_EED1038CC0162BF ON navire (le_pavillon_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navire DROP FOREIGN KEY FK_EED1038CC0162BF');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP INDEX IDX_EED1038CC0162BF ON navire');
        $this->addSql('ALTER TABLE navire DROP le_pavillon_id');
    }
}
