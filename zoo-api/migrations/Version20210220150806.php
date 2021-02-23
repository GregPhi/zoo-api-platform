<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210220150806 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal ADD animal_zooposition_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F678B7AD7 FOREIGN KEY (animal_zooposition_id) REFERENCES zoo_position (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6AAB231F678B7AD7 ON animal (animal_zooposition_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F678B7AD7');
        $this->addSql('DROP INDEX UNIQ_6AAB231F678B7AD7 ON animal');
        $this->addSql('ALTER TABLE animal DROP animal_zooposition_id');
    }
}
