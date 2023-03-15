<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230315105050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concerts ADD salle_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concerts ADD CONSTRAINT FK_730600F1DC304035 FOREIGN KEY (salle_id) REFERENCES salles (id)');
        $this->addSql('CREATE INDEX IDX_730600F1DC304035 ON concerts (salle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concerts DROP FOREIGN KEY FK_730600F1DC304035');
        $this->addSql('DROP INDEX IDX_730600F1DC304035 ON concerts');
        $this->addSql('ALTER TABLE concerts DROP salle_id');
    }
}
