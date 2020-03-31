<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200331110440 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Filieres CHANGE id_formation_id id_formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Formations ADD reservation_id INT NOT NULL');
        $this->addSql('ALTER TABLE Formations ADD CONSTRAINT FK_FCD22E7B83297E7 FOREIGN KEY (reservation_id) REFERENCES Reservation (id)');
        $this->addSql('CREATE INDEX IDX_FCD22E7B83297E7 ON Formations (reservation_id)');
        $this->addSql('ALTER TABLE Reservation CHANGE id_user_id id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Utilisateurs CHANGE id_filiere_id id_filiere_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE UtilisateursTrajets CHANGE idUser_id idUser_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Voitures CHANGE id_user_id id_user_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Filieres CHANGE id_formation_id id_formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Formations DROP FOREIGN KEY FK_FCD22E7B83297E7');
        $this->addSql('DROP INDEX IDX_FCD22E7B83297E7 ON Formations');
        $this->addSql('ALTER TABLE Formations DROP reservation_id');
        $this->addSql('ALTER TABLE Reservation CHANGE id_user_id id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Utilisateurs CHANGE id_filiere_id id_filiere_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE UtilisateursTrajets CHANGE idUser_id idUser_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Voitures CHANGE id_user_id id_user_id INT DEFAULT NULL');
    }
}
