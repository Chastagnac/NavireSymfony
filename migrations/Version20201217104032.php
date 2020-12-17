<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217104032 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navire CHANGE navire nom VARCHAR(100) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EED1038B519409E ON navire (imo)');
        $this->addSql('CREATE UNIQUE INDEX mmsi_unique ON navire (mmsi)');
        $this->addSql('ALTER TABLE navire RENAME INDEX fk_navire_aisshiptype TO IDX_EED103839F5FA88');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_EED1038B519409E ON navire');
        $this->addSql('DROP INDEX mmsi_unique ON navire');
        $this->addSql('ALTER TABLE navire CHANGE nom navire VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE navire RENAME INDEX idx_eed103839f5fa88 TO FK_NAVIRE_AISSHIPTYPE');
    }
}
