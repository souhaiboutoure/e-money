<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210302135250 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transaction ADD withdrawal_account_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1F77CB33E FOREIGN KEY (withdrawal_account_id) REFERENCES account (id)');
        $this->addSql('CREATE INDEX IDX_723705D1F77CB33E ON transaction (withdrawal_account_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1F77CB33E');
        $this->addSql('DROP INDEX IDX_723705D1F77CB33E ON transaction');
        $this->addSql('ALTER TABLE transaction DROP withdrawal_account_id');
    }
}
