<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200331124730 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ReservationUtilisateurs (id INT AUTO_INCREMENT NOT NULL, reservation_id INT DEFAULT NULL, utilisateur_id INT DEFAULT NULL, INDEX IDX_C17E899CB83297E7 (reservation_id), INDEX IDX_C17E899CFB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ReservationUtilisateurs ADD CONSTRAINT FK_C17E899CB83297E7 FOREIGN KEY (reservation_id) REFERENCES Reservations (id)');
        $this->addSql('ALTER TABLE ReservationUtilisateurs ADD CONSTRAINT FK_C17E899CFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES Utilisateurs (id)');
        $this->addSql('ALTER TABLE Filieres ADD formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Filieres ADD CONSTRAINT FK_F5E1C3435200282E FOREIGN KEY (formation_id) REFERENCES Formations (id)');
        $this->addSql('CREATE INDEX IDX_F5E1C3435200282E ON Filieres (formation_id)');
        $this->addSql('ALTER TABLE Reservations ADD voiture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Reservations ADD CONSTRAINT FK_187C79C1181A8BA FOREIGN KEY (voiture_id) REFERENCES Voitures (id)');
        $this->addSql('CREATE INDEX IDX_187C79C1181A8BA ON Reservations (voiture_id)');
        $this->addSql('ALTER TABLE SemainesFormation ADD formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE SemainesFormation ADD CONSTRAINT FK_6CD883625200282E FOREIGN KEY (formation_id) REFERENCES Formations (id)');
        $this->addSql('CREATE INDEX IDX_6CD883625200282E ON SemainesFormation (formation_id)');
        $this->addSql('ALTER TABLE Utilisateurs ADD filiere_id INT DEFAULT NULL, ADD formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Utilisateurs ADD CONSTRAINT FK_514AEAA6180AA129 FOREIGN KEY (filiere_id) REFERENCES Filieres (id)');
        $this->addSql('ALTER TABLE Utilisateurs ADD CONSTRAINT FK_514AEAA65200282E FOREIGN KEY (formation_id) REFERENCES Formations (id)');
        $this->addSql('CREATE INDEX IDX_514AEAA6180AA129 ON Utilisateurs (filiere_id)');
        $this->addSql('CREATE INDEX IDX_514AEAA65200282E ON Utilisateurs (formation_id)');
        $this->addSql('ALTER TABLE UtilisateursTrajets ADD utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE UtilisateursTrajets ADD CONSTRAINT FK_C2C094AAFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES Utilisateurs (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2C094AAFB88E14F ON UtilisateursTrajets (utilisateur_id)');
        $this->addSql('ALTER TABLE Voitures ADD proprietaire_id INT DEFAULT NULL, ADD immatriculation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE Voitures ADD CONSTRAINT FK_722E524D76C50E4A FOREIGN KEY (proprietaire_id) REFERENCES Utilisateurs (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_722E524D76C50E4A ON Voitures (proprietaire_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE ReservationUtilisateurs');
        $this->addSql('ALTER TABLE Filieres DROP FOREIGN KEY FK_F5E1C3435200282E');
        $this->addSql('DROP INDEX IDX_F5E1C3435200282E ON Filieres');
        $this->addSql('ALTER TABLE Filieres DROP formation_id');
        $this->addSql('ALTER TABLE Reservations DROP FOREIGN KEY FK_187C79C1181A8BA');
        $this->addSql('DROP INDEX IDX_187C79C1181A8BA ON Reservations');
        $this->addSql('ALTER TABLE Reservations DROP voiture_id');
        $this->addSql('ALTER TABLE SemainesFormation DROP FOREIGN KEY FK_6CD883625200282E');
        $this->addSql('DROP INDEX IDX_6CD883625200282E ON SemainesFormation');
        $this->addSql('ALTER TABLE SemainesFormation DROP formation_id');
        $this->addSql('ALTER TABLE Utilisateurs DROP FOREIGN KEY FK_514AEAA6180AA129');
        $this->addSql('ALTER TABLE Utilisateurs DROP FOREIGN KEY FK_514AEAA65200282E');
        $this->addSql('DROP INDEX IDX_514AEAA6180AA129 ON Utilisateurs');
        $this->addSql('DROP INDEX IDX_514AEAA65200282E ON Utilisateurs');
        $this->addSql('ALTER TABLE Utilisateurs DROP filiere_id, DROP formation_id');
        $this->addSql('ALTER TABLE UtilisateursTrajets DROP FOREIGN KEY FK_C2C094AAFB88E14F');
        $this->addSql('DROP INDEX UNIQ_C2C094AAFB88E14F ON UtilisateursTrajets');
        $this->addSql('ALTER TABLE UtilisateursTrajets DROP utilisateur_id');
        $this->addSql('ALTER TABLE Voitures DROP FOREIGN KEY FK_722E524D76C50E4A');
        $this->addSql('DROP INDEX UNIQ_722E524D76C50E4A ON Voitures');
        $this->addSql('ALTER TABLE Voitures DROP proprietaire_id, DROP immatriculation');
    }
}
