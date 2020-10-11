<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201008160102 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task ADD creator_id INT DEFAULT NULL, ADD user_working_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB2561220EA6 FOREIGN KEY (creator_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25826EB4DA FOREIGN KEY (user_working_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_527EDB2561220EA6 ON task (creator_id)');
        $this->addSql('CREATE INDEX IDX_527EDB25826EB4DA ON task (user_working_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB2561220EA6');
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB25826EB4DA');
        $this->addSql('DROP INDEX IDX_527EDB2561220EA6 ON task');
        $this->addSql('DROP INDEX IDX_527EDB25826EB4DA ON task');
        $this->addSql('ALTER TABLE task DROP creator_id, DROP user_working_id');
    }
}
