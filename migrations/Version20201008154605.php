<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201008154605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE task (
                                id INT AUTO_INCREMENT NOT NULL,
                                project_id INT DEFAULT NULL,
                                name VARCHAR(255) NOT NULL,
                                description LONGTEXT DEFAULT NULL,
                                priority INT DEFAULT NULL,
                                creation_date DATE NOT NULL,
                                end_date DATE DEFAULT NULL,
                                color VARCHAR(50) DEFAULT NULL,
                                completed TINYINT(1) NOT NULL,
                                INDEX IDX_527EDB25166D1F9C (project_id),
                                PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB'
        );
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE task');
    }
}
