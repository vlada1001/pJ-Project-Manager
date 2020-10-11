<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006205756 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, creator_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, priority INT NOT NULL, description LONGTEXT DEFAULT NULL, creation_date DATE NOT NULL, end_date DATE DEFAULT NULL, color VARCHAR(50) DEFAULT NULL, INDEX IDX_2FB3D0EE61220EA6 (creator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_team (project_id INT NOT NULL, team_id INT NOT NULL, INDEX IDX_FD716E07166D1F9C (project_id), INDEX IDX_FD716E07296CD8AE (team_id), PRIMARY KEY(project_id, team_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE61220EA6 FOREIGN KEY (creator_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE project_team ADD CONSTRAINT FK_FD716E07166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_team ADD CONSTRAINT FK_FD716E07296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_team DROP FOREIGN KEY FK_FD716E07166D1F9C');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_team');
    }
}
