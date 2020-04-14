<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200326203454 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE stations (id INT AUTO_INCREMENT NOT NULL, geo_point VARCHAR(255) NOT NULL, geo_shape JSON NOT NULL, objectid INT NOT NULL, ref_zdl INT NOT NULL, station_name VARCHAR(100) NOT NULL, long_name VARCHAR(100) NOT NULL, iv_name VARCHAR(100) NOT NULL, num_mod INT NOT NULL, mode VARCHAR(100) NOT NULL, fer INT NOT NULL, train INT NOT NULL, rer INT NOT NULL, metro INT NOT NULL, tramway INT NOT NULL, navette INT NOT NULL, val INT NOT NULL, terfer INT NOT NULL, tertrain INT NOT NULL, terrer INT NOT NULL, termetro VARCHAR(100) NOT NULL, ternavette INT NOT NULL, tertram INT NOT NULL, terval INT NOT NULL, refliga VARCHAR(100) NOT NULL, refligc VARCHAR(100) DEFAULT NULL, line VARCHAR(100) NOT NULL, cod_ligf DOUBLE PRECISION NOT NULL, code_line VARCHAR(100) NOT NULL, indice_lig VARCHAR(100) NOT NULL, reseau VARCHAR(100) NOT NULL, res_com VARCHAR(100) NOT NULL, cod_resf DOUBLE PRECISION NOT NULL, res_stif DOUBLE PRECISION NOT NULL, exploitant VARCHAR(100) NOT NULL, num_psr INT NOT NULL, idf INT NOT NULL, principal INT NOT NULL, x DOUBLE PRECISION NOT NULL, y DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE stations');
    }
}
