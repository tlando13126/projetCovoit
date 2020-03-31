<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200331094834 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Filieres ADD id_formation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Filieres ADD CONSTRAINT FK_F5E1C34371C15D5C FOREIGN KEY (id_formation_id) REFERENCES Formations (id)');
        $this->addSql('CREATE INDEX IDX_F5E1C34371C15D5C ON Filieres (id_formation_id)');
        $this->addSql('ALTER TABLE Reservation ADD id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Reservation ADD CONSTRAINT FK_C454C68279F37AE5 FOREIGN KEY (id_user_id) REFERENCES Utilisateurs (id)');
        $this->addSql('CREATE INDEX IDX_C454C68279F37AE5 ON Reservation (id_user_id)');
        $this->addSql('ALTER TABLE Utilisateurs ADD id_filiere_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Utilisateurs ADD CONSTRAINT FK_514AEAA6BD8021FE FOREIGN KEY (id_filiere_id) REFERENCES Filieres (id)');
        $this->addSql('CREATE INDEX IDX_514AEAA6BD8021FE ON Utilisateurs (id_filiere_id)');
        $this->addSql('ALTER TABLE UtilisateursTrajets ADD idUser_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE UtilisateursTrajets ADD CONSTRAINT FK_C2C094AAB7D7B867 FOREIGN KEY (idUser_id) REFERENCES Utilisateurs (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C2C094AAB7D7B867 ON UtilisateursTrajets (idUser_id)');
        $this->addSql('ALTER TABLE Voitures ADD id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Voitures ADD CONSTRAINT FK_722E524D79F37AE5 FOREIGN KEY (id_user_id) REFERENCES Utilisateurs (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_722E524D79F37AE5 ON Voitures (id_user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Filieres DROP FOREIGN KEY FK_F5E1C34371C15D5C');
        $this->addSql('DROP INDEX IDX_F5E1C34371C15D5C ON Filieres');
        $this->addSql('ALTER TABLE Filieres DROP id_formation_id');
        $this->addSql('ALTER TABLE Reservation DROP FOREIGN KEY FK_C454C68279F37AE5');
        $this->addSql('DROP INDEX IDX_C454C68279F37AE5 ON Reservation');
        $this->addSql('ALTER TABLE Reservation DROP id_user_id');
        $this->addSql('ALTER TABLE Utilisateurs DROP FOREIGN KEY FK_514AEAA6BD8021FE');
        $this->addSql('DROP INDEX IDX_514AEAA6BD8021FE ON Utilisateurs');
        $this->addSql('ALTER TABLE Utilisateurs DROP id_filiere_id');
        $this->addSql('ALTER TABLE UtilisateursTrajets DROP FOREIGN KEY FK_C2C094AAB7D7B867');
        $this->addSql('DROP INDEX UNIQ_C2C094AAB7D7B867 ON UtilisateursTrajets');
        $this->addSql('ALTER TABLE UtilisateursTrajets DROP idUser_id');
        $this->addSql('ALTER TABLE Voitures DROP FOREIGN KEY FK_722E524D79F37AE5');
        $this->addSql('DROP INDEX UNIQ_722E524D79F37AE5 ON Voitures');
        $this->addSql('ALTER TABLE Voitures DROP id_user_id');
    }
}
