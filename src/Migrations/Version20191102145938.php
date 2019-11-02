<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191102145938 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE competition (id INT AUTO_INCREMENT NOT NULL, golf_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, date DATE NOT NULL, liste_joueur VARCHAR(255) NOT NULL, heure_debut TIME NOT NULL, decalage_depart TIME NOT NULL, fichier VARCHAR(255) NOT NULL, trou1 TIME NOT NULL, trou2 TIME NOT NULL, trou3 TIME NOT NULL, trou4 TIME NOT NULL, trou5 TIME NOT NULL, trou6 TIME NOT NULL, trou7 TIME NOT NULL, trou8 TIME NOT NULL, trou9 TIME NOT NULL, trou10 TIME NOT NULL, trou11 TIME NOT NULL, trou12 TIME NOT NULL, trou13 TIME NOT NULL, trou14 TIME NOT NULL, trou15 TIME NOT NULL, trou16 TIME NOT NULL, trou17 TIME NOT NULL, trou18 TIME NOT NULL, INDEX IDX_B50A2CB1F1503E2B (golf_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE decalage_trou_partie (id INT AUTO_INCREMENT NOT NULL, partie_id INT DEFAULT NULL, trou_id INT DEFAULT NULL, decalage INT DEFAULT NULL, INDEX IDX_A958D538E075F7A4 (partie_id), INDEX IDX_A958D5381D222B9C (trou_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE golf (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, par_total INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parcours (id INT AUTO_INCREMENT NOT NULL, golf_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_99B1DEE3F1503E2B (golf_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partie (id INT AUTO_INCREMENT NOT NULL, competition_id INT DEFAULT NULL, nb_joueur INT NOT NULL, INDEX IDX_59B1F3D7B39D312 (competition_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trou (id INT AUTO_INCREMENT NOT NULL, golf_id INT NOT NULL, numero INT NOT NULL, par INT NOT NULL, temps_deplacement VARCHAR(255) NOT NULL, INDEX IDX_5066A632F1503E2B (golf_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT FK_B50A2CB1F1503E2B FOREIGN KEY (golf_id) REFERENCES golf (id)');
        $this->addSql('ALTER TABLE decalage_trou_partie ADD CONSTRAINT FK_A958D538E075F7A4 FOREIGN KEY (partie_id) REFERENCES partie (id)');
        $this->addSql('ALTER TABLE decalage_trou_partie ADD CONSTRAINT FK_A958D5381D222B9C FOREIGN KEY (trou_id) REFERENCES trou (id)');
        $this->addSql('ALTER TABLE parcours ADD CONSTRAINT FK_99B1DEE3F1503E2B FOREIGN KEY (golf_id) REFERENCES golf (id)');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D7B39D312 FOREIGN KEY (competition_id) REFERENCES competition (id)');
        $this->addSql('ALTER TABLE trou ADD CONSTRAINT FK_5066A632F1503E2B FOREIGN KEY (golf_id) REFERENCES golf (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3D7B39D312');
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY FK_B50A2CB1F1503E2B');
        $this->addSql('ALTER TABLE parcours DROP FOREIGN KEY FK_99B1DEE3F1503E2B');
        $this->addSql('ALTER TABLE trou DROP FOREIGN KEY FK_5066A632F1503E2B');
        $this->addSql('ALTER TABLE decalage_trou_partie DROP FOREIGN KEY FK_A958D538E075F7A4');
        $this->addSql('ALTER TABLE decalage_trou_partie DROP FOREIGN KEY FK_A958D5381D222B9C');
        $this->addSql('DROP TABLE competition');
        $this->addSql('DROP TABLE decalage_trou_partie');
        $this->addSql('DROP TABLE golf');
        $this->addSql('DROP TABLE parcours');
        $this->addSql('DROP TABLE partie');
        $this->addSql('DROP TABLE trou');
        $this->addSql('DROP TABLE user');
    }
}
