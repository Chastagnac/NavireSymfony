<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216155650 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navire DROP FOREIGN KEY FK_EED1038CC0162BF');
        $this->addSql('DROP INDEX IDX_EED1038CC0162BF ON navire');
        $this->addSql('ALTER TABLE navire CHANGE le_pavillon_id idpays INT NOT NULL');
        $this->addSql('ALTER TABLE navire ADD CONSTRAINT FK_EED1038E750CD0E FOREIGN KEY (idpays) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_EED1038E750CD0E ON navire (idpays)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navire DROP FOREIGN KEY FK_EED1038E750CD0E');
        $this->addSql('DROP INDEX IDX_EED1038E750CD0E ON navire');
        $this->addSql('ALTER TABLE navire CHANGE idpays le_pavillon_id INT NOT NULL');
        $this->addSql('ALTER TABLE navire ADD CONSTRAINT FK_EED1038CC0162BF FOREIGN KEY (le_pavillon_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_EED1038CC0162BF ON navire (le_pavillon_id)');
    }
}
