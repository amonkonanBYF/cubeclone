<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170719080455 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE business (business_id INT AUTO_INCREMENT NOT NULL, business_name VARCHAR(255) NOT NULL, business_adress VARCHAR(255) DEFAULT NULL, business_activity VARCHAR(255) DEFAULT NULL, business_telephone INT DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(business_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission (mission_id INT AUTO_INCREMENT NOT NULL, business INT DEFAULT NULL, user_real INT DEFAULT NULL, mission_name VARCHAR(255) NOT NULL, mission_activity VARCHAR(255) DEFAULT NULL, price INT DEFAULT NULL, description VARCHAR(255) NOT NULL, date_as DATETIME DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_9067F23C8D36E38 (business), INDEX IDX_9067F23CEC0D859C (user_real), PRIMARY KEY(mission_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE realise (realise_id INT AUTO_INCREMENT NOT NULL, user INT DEFAULT NULL, date DATETIME DEFAULT NULL, validated TINYINT(1) DEFAULT NULL, INDEX IDX_15CCD99E8D93D649 (user), PRIMARY KEY(realise_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (user_id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, adress VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, telephone INT DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C8D36E38 FOREIGN KEY (business) REFERENCES business (business_id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CEC0D859C FOREIGN KEY (user_real) REFERENCES realise (realise_id)');
        $this->addSql('ALTER TABLE realise ADD CONSTRAINT FK_15CCD99E8D93D649 FOREIGN KEY (user) REFERENCES user (user_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23C8D36E38');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CEC0D859C');
        $this->addSql('ALTER TABLE realise DROP FOREIGN KEY FK_15CCD99E8D93D649');
        $this->addSql('DROP TABLE business');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE realise');
        $this->addSql('DROP TABLE user');
    }
}
