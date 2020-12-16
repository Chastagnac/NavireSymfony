<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216151736 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navire DROP FOREIGN KEY FK_NAVIRE_AISSHIPTYPE');
        $this->addSql('DROP INDEX FK_NAVIRE_AISSHIPTYPE ON navire');
        $this->addSql('ALTER TABLE navire DROP idAisShiptype');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navire ADD idAisShiptype INT NOT NULL');
        $this->addSql('ALTER TABLE navire ADD CONSTRAINT FK_NAVIRE_AISSHIPTYPE FOREIGN KEY (idAisShiptype) REFERENCES aisshiptype (id)');
        $this->addSql('CREATE INDEX FK_NAVIRE_AISSHIPTYPE ON navire (idAisShiptype)');
    }
}
