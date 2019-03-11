<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190311184550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE oc_t_user_email_tmp (fk_i_user_id INT UNSIGNED NOT NULL, s_new_email VARCHAR(100) NOT NULL, dt_date DATETIME NOT NULL, PRIMARY KEY(fk_i_user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_keywords (s_md5 VARCHAR(32) NOT NULL, fk_c_locale_code CHAR(5) NOT NULL, fk_i_category_id INT UNSIGNED DEFAULT NULL, fk_i_city_id INT UNSIGNED DEFAULT NULL, s_original_text VARCHAR(255) NOT NULL, s_anchor_text VARCHAR(255) NOT NULL, s_normalized_text VARCHAR(255) NOT NULL, INDEX fk_c_locale_code (fk_c_locale_code), INDEX fk_i_city_id (fk_i_city_id), INDEX fk_i_category_id (fk_i_category_id), PRIMARY KEY(s_md5, fk_c_locale_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_locale (pk_c_code CHAR(5) NOT NULL, s_name VARCHAR(100) NOT NULL, s_short_name VARCHAR(40) NOT NULL, s_description VARCHAR(100) NOT NULL, s_version VARCHAR(20) NOT NULL, s_author_name VARCHAR(100) NOT NULL, s_author_url VARCHAR(100) NOT NULL, s_currency_format VARCHAR(50) NOT NULL, s_dec_point VARCHAR(2) DEFAULT \'.\', s_thousands_sep VARCHAR(2) DEFAULT NULL, i_num_dec TINYINT(1) DEFAULT \'2\', s_date_format VARCHAR(20) NOT NULL, s_stop_words TEXT DEFAULT NULL, b_enabled TINYINT(1) DEFAULT \'1\' NOT NULL, b_enabled_bo TINYINT(1) DEFAULT \'1\' NOT NULL, UNIQUE INDEX s_short_name (s_short_name), PRIMARY KEY(pk_c_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_log (id INT UNSIGNED AUTO_INCREMENT NOT NULL, dt_date DATETIME NOT NULL, s_section VARCHAR(50) NOT NULL, s_action VARCHAR(50) NOT NULL, fk_i_id INT UNSIGNED NOT NULL, s_data VARCHAR(250) NOT NULL, s_ip VARCHAR(50) NOT NULL, s_who VARCHAR(50) NOT NULL, fk_i_who_id INT UNSIGNED NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_alerts_sent (d_date DATE NOT NULL, i_num_alerts_sent INT UNSIGNED DEFAULT 0 NOT NULL, PRIMARY KEY(d_date)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_plugin_category (id INT UNSIGNED AUTO_INCREMENT NOT NULL, fk_i_category_id INT UNSIGNED DEFAULT NULL, s_plugin_name VARCHAR(40) NOT NULL, INDEX fk_i_category_id (fk_i_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_cron (id INT UNSIGNED AUTO_INCREMENT NOT NULL, e_type VARCHAR(40) DEFAULT NULL, d_last_exec DATETIME NOT NULL, d_next_exec DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_country (pk_c_code CHAR(2) NOT NULL, s_name VARCHAR(80) NOT NULL, s_slug VARCHAR(80) DEFAULT \'\' NOT NULL, INDEX idx_s_slug (s_slug), INDEX idx_s_name (s_name), PRIMARY KEY(pk_c_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_city_stats (fk_i_city_id INT UNSIGNED NOT NULL, i_num_items INT UNSIGNED DEFAULT 0 NOT NULL, INDEX idx_num_items (i_num_items), PRIMARY KEY(fk_i_city_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_item_comment (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, fk_i_item_id INT UNSIGNED DEFAULT NULL, fk_i_user_id INT UNSIGNED DEFAULT NULL, dt_pub_date DATETIME NOT NULL, s_title VARCHAR(200) NOT NULL, s_author_name VARCHAR(100) NOT NULL, s_author_email VARCHAR(100) NOT NULL, s_body TEXT NOT NULL, b_enabled TINYINT(1) DEFAULT \'1\' NOT NULL, b_active TINYINT(1) DEFAULT \'0\' NOT NULL, b_spam TINYINT(1) DEFAULT \'0\' NOT NULL, INDEX fk_i_item_id (fk_i_item_id), INDEX fk_i_user_id (fk_i_user_id), PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_item_description (fk_i_item_id INT UNSIGNED NOT NULL, fk_c_locale_code CHAR(5) NOT NULL, s_title VARCHAR(100) NOT NULL, s_description MEDIUMTEXT NOT NULL, INDEX IDX_DC2201E07495988B (fk_i_item_id), INDEX IDX_DC2201E06D58090D (fk_c_locale_code), PRIMARY KEY(fk_i_item_id, fk_c_locale_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_item_stats (dt_date DATE NOT NULL, fk_i_item_id INT UNSIGNED NOT NULL, i_num_views INT UNSIGNED DEFAULT 0 NOT NULL, i_num_spam INT UNSIGNED DEFAULT 0 NOT NULL, i_num_repeated INT UNSIGNED DEFAULT 0 NOT NULL, i_num_bad_classified INT UNSIGNED DEFAULT 0 NOT NULL, i_num_offensive INT UNSIGNED DEFAULT 0 NOT NULL, i_num_expired INT UNSIGNED DEFAULT 0 NOT NULL, i_num_premium_views INT UNSIGNED DEFAULT 0 NOT NULL, INDEX dt_date_fk_i_item_id (dt_date, fk_i_item_id), INDEX IDX_4D434A4A7495988B (fk_i_item_id), PRIMARY KEY(dt_date, fk_i_item_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_ban_rule (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, s_name VARCHAR(250) DEFAULT \'\' NOT NULL, s_ip VARCHAR(50) DEFAULT \'\' NOT NULL, s_email VARCHAR(250) DEFAULT \'\' NOT NULL, PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_category_stats (fk_i_category_id INT UNSIGNED NOT NULL, i_num_items INT UNSIGNED DEFAULT 0 NOT NULL, PRIMARY KEY(fk_i_category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_meta_fields (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, s_name VARCHAR(255) NOT NULL, s_slug VARCHAR(255) NOT NULL, e_type VARCHAR(40) DEFAULT NULL, s_options VARCHAR(2048) DEFAULT NULL, b_required TINYINT(1) DEFAULT \'0\' NOT NULL, b_searchable TINYINT(1) DEFAULT \'0\' NOT NULL, PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_city (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, fk_i_region_id INT UNSIGNED DEFAULT NULL, fk_c_country_code CHAR(2) DEFAULT NULL, s_name VARCHAR(60) NOT NULL, s_slug VARCHAR(60) DEFAULT \'\' NOT NULL, b_active TINYINT(1) DEFAULT \'1\' NOT NULL, INDEX fk_i_region_id (fk_i_region_id), INDEX fk_c_country_code (fk_c_country_code), INDEX idx_s_slug (s_slug), INDEX idx_s_name (s_name), PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_alerts (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, s_email VARCHAR(100) DEFAULT NULL, fk_i_user_id INT UNSIGNED DEFAULT NULL, s_search LONGTEXT DEFAULT NULL, s_secret VARCHAR(40) DEFAULT NULL, b_active TINYINT(1) DEFAULT \'0\' NOT NULL, e_type VARCHAR(40) DEFAULT NULL, dt_date DATETIME DEFAULT NULL, dt_unsub_date DATETIME DEFAULT NULL, PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_currency (pk_c_code CHAR(3) NOT NULL, s_name VARCHAR(40) NOT NULL, s_description VARCHAR(80) DEFAULT NULL, b_enabled TINYINT(1) DEFAULT \'1\' NOT NULL, UNIQUE INDEX s_name (s_name), PRIMARY KEY(pk_c_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_category (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, fk_i_parent_id INT UNSIGNED DEFAULT NULL, i_expiration_days INT UNSIGNED DEFAULT 0 NOT NULL, i_position INT UNSIGNED DEFAULT 0 NOT NULL, b_enabled TINYINT(1) DEFAULT \'1\' NOT NULL, b_price_enabled TINYINT(1) DEFAULT \'1\' NOT NULL, s_icon VARCHAR(250) DEFAULT NULL, INDEX fk_i_parent_id (fk_i_parent_id), INDEX i_position (i_position), PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_meta_categories (fk_i_category_id INT UNSIGNED NOT NULL, fk_i_field_id INT UNSIGNED NOT NULL, INDEX IDX_EA012EF4D5760A85 (fk_i_category_id), INDEX IDX_EA012EF4B2E8DB21 (fk_i_field_id), PRIMARY KEY(fk_i_category_id, fk_i_field_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_item_location (fk_i_item_id INT UNSIGNED NOT NULL, fk_c_country_code CHAR(5) NOT NULL, fk_i_region_id INT UNSIGNED DEFAULT NULL, fk_i_city_id INT UNSIGNED DEFAULT NULL, fk_i_city_area_id INT UNSIGNED DEFAULT NULL, s_country VARCHAR(40) DEFAULT NULL, s_address VARCHAR(100) DEFAULT NULL, s_zip VARCHAR(15) DEFAULT NULL, s_region VARCHAR(100) DEFAULT NULL, s_city VARCHAR(100) DEFAULT NULL, s_city_area VARCHAR(200) DEFAULT NULL, d_coord_lat NUMERIC(10, 6) DEFAULT NULL, d_coord_long NUMERIC(10, 6) DEFAULT NULL, UNIQUE INDEX UNIQ_D03BC7877495988B (fk_i_item_id), INDEX fk_c_country_code (fk_c_country_code), INDEX fk_i_city_area_id (fk_i_city_area_id), INDEX fk_i_city_id (fk_i_city_id), INDEX fk_i_region_id (fk_i_region_id), PRIMARY KEY(fk_i_item_id, fk_c_country_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_country_stats (fk_c_country_code CHAR(2) NOT NULL, i_num_items INT UNSIGNED DEFAULT 0 NOT NULL, INDEX idx_num_items (i_num_items), PRIMARY KEY(fk_c_country_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_region (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, fk_c_country_code CHAR(2) DEFAULT NULL, s_name VARCHAR(60) NOT NULL, s_slug VARCHAR(60) DEFAULT \'\' NOT NULL, b_active TINYINT(1) DEFAULT \'1\' NOT NULL, INDEX fk_c_country_code (fk_c_country_code), INDEX idx_s_slug (s_slug), INDEX idx_s_name (s_name), PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_preference (id INT UNSIGNED AUTO_INCREMENT NOT NULL, s_section VARCHAR(128) NOT NULL, s_name VARCHAR(128) NOT NULL, s_value LONGTEXT NOT NULL, e_type VARCHAR(40) DEFAULT NULL, UNIQUE INDEX s_section (s_section, s_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_user (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, fk_c_country_code CHAR(2) DEFAULT NULL, fk_i_region_id INT UNSIGNED DEFAULT NULL, fk_i_city_id INT UNSIGNED DEFAULT NULL, fk_i_city_area_id INT UNSIGNED DEFAULT NULL, dt_reg_date DATETIME NOT NULL, dt_mod_date DATETIME DEFAULT NULL, s_name VARCHAR(100) NOT NULL, s_username VARCHAR(100) NOT NULL, s_password CHAR(60) NOT NULL, s_secret VARCHAR(40) DEFAULT NULL, s_email VARCHAR(100) NOT NULL, s_website VARCHAR(100) DEFAULT NULL, s_phone_land VARCHAR(45) DEFAULT NULL, s_phone_mobile VARCHAR(45) DEFAULT NULL, b_enabled TINYINT(1) DEFAULT \'1\' NOT NULL, b_active TINYINT(1) DEFAULT \'0\' NOT NULL, s_pass_code VARCHAR(100) DEFAULT NULL, s_pass_date DATETIME DEFAULT NULL, s_pass_ip VARCHAR(15) DEFAULT NULL, s_country VARCHAR(40) DEFAULT NULL, s_address VARCHAR(100) DEFAULT NULL, s_zip VARCHAR(15) DEFAULT NULL, s_region VARCHAR(100) DEFAULT NULL, s_city VARCHAR(100) DEFAULT NULL, s_city_area VARCHAR(200) DEFAULT NULL, d_coord_lat NUMERIC(10, 6) DEFAULT NULL, d_coord_long NUMERIC(10, 6) DEFAULT NULL, b_company TINYINT(1) DEFAULT \'0\' NOT NULL, i_items INT UNSIGNED DEFAULT 0, i_comments INT UNSIGNED DEFAULT 0, dt_access_date DATETIME DEFAULT \'0000-00-00 00:00:00\' NOT NULL, s_access_ip VARCHAR(15) DEFAULT \'\' NOT NULL, INDEX fk_i_region_id (fk_i_region_id), INDEX fk_c_country_code (fk_c_country_code), INDEX fk_i_city_area_id (fk_i_city_area_id), INDEX idx_s_username (s_username), INDEX fk_i_city_id (fk_i_city_id), INDEX idx_s_name (s_name), UNIQUE INDEX s_email (s_email), PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_user_description (fk_i_user_id INT UNSIGNED NOT NULL, fk_c_locale_code CHAR(5) NOT NULL, INDEX IDX_95519043C1941940 (fk_i_user_id), INDEX IDX_955190436D58090D (fk_c_locale_code), PRIMARY KEY(fk_i_user_id, fk_c_locale_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_latest_searches (id INT UNSIGNED AUTO_INCREMENT NOT NULL, d_date DATETIME NOT NULL, s_search VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_widget (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, s_description VARCHAR(40) NOT NULL, s_location VARCHAR(40) NOT NULL, e_type VARCHAR(40) DEFAULT NULL, s_content MEDIUMTEXT NOT NULL, PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_item_resource (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, fk_i_item_id INT UNSIGNED DEFAULT NULL, s_name VARCHAR(60) DEFAULT NULL, s_extension VARCHAR(10) DEFAULT NULL, s_content_type VARCHAR(40) DEFAULT NULL, s_path VARCHAR(250) DEFAULT NULL, INDEX fk_i_item_id (fk_i_item_id), INDEX idx_s_content_type (pk_i_id, s_content_type), PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_item_meta (s_multi VARCHAR(20) DEFAULT \'\' NOT NULL, fk_i_item_id INT UNSIGNED NOT NULL, fk_i_field_id INT UNSIGNED NOT NULL, s_value TEXT DEFAULT NULL, INDEX fk_i_field_id (fk_i_field_id), INDEX fk_i_item_id (fk_i_item_id), PRIMARY KEY(s_multi, fk_i_item_id, fk_i_field_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_locations_tmp (id_location VARCHAR(10) NOT NULL, e_type VARCHAR(40) NOT NULL, PRIMARY KEY(id_location, e_type)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_pages (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, s_internal_name VARCHAR(50) DEFAULT NULL, b_indelible TINYINT(1) DEFAULT \'0\' NOT NULL, b_link TINYINT(1) DEFAULT \'1\' NOT NULL, dt_pub_date DATETIME NOT NULL, dt_mod_date DATETIME DEFAULT NULL, i_order INT DEFAULT 0 NOT NULL, s_meta TEXT DEFAULT NULL, PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_pages_description (fk_i_pages_id INT UNSIGNED NOT NULL, fk_c_locale_code CHAR(5) NOT NULL, INDEX IDX_196DF09DB6C501B6 (fk_i_pages_id), INDEX IDX_196DF09D6D58090D (fk_c_locale_code), PRIMARY KEY(fk_i_pages_id, fk_c_locale_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_region_stats (fk_i_region_id INT UNSIGNED NOT NULL, i_num_items INT UNSIGNED DEFAULT 0 NOT NULL, INDEX idx_num_items (i_num_items), PRIMARY KEY(fk_i_region_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_item (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, fk_i_user_id INT UNSIGNED DEFAULT NULL, fk_i_category_id INT UNSIGNED DEFAULT NULL, fk_c_currency_code CHAR(3) DEFAULT NULL, dt_pub_date DATETIME NOT NULL, dt_mod_date DATETIME DEFAULT NULL, f_price DOUBLE PRECISION DEFAULT NULL, i_price BIGINT DEFAULT NULL, s_contact_name VARCHAR(100) DEFAULT NULL, s_contact_email VARCHAR(140) NOT NULL, s_ip VARCHAR(64) DEFAULT \'\' NOT NULL, b_premium TINYINT(1) DEFAULT \'0\' NOT NULL, b_enabled TINYINT(1) DEFAULT \'1\' NOT NULL, b_active TINYINT(1) DEFAULT \'0\' NOT NULL, b_spam TINYINT(1) DEFAULT \'0\' NOT NULL, s_secret VARCHAR(40) DEFAULT NULL, b_show_email TINYINT(1) DEFAULT NULL, dt_expiration DATETIME DEFAULT \'9999-12-31 23:59:59\' NOT NULL, INDEX fk_c_currency_code (fk_c_currency_code), INDEX fk_i_user_id (fk_i_user_id), INDEX fk_i_category_id (fk_i_category_id), INDEX idx_price (i_price), INDEX idx_s_contact_email (s_contact_email), INDEX idx_pub_date (dt_pub_date), INDEX idx_b_premium (b_premium), PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_city_area (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, fk_i_city_id INT UNSIGNED DEFAULT NULL, s_name VARCHAR(255) NOT NULL, INDEX fk_i_city_id (fk_i_city_id), INDEX idx_s_name (s_name), PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_category_description (fk_i_category_id INT UNSIGNED NOT NULL, fk_c_locale_code CHAR(5) NOT NULL, s_name VARCHAR(100) DEFAULT NULL, s_description VARCHAR(100) DEFAULT NULL, s_slug VARCHAR(100) DEFAULT NULL, INDEX fk_i_category_id (fk_i_category_id), INDEX fk_c_locale_code (fk_c_locale_code), PRIMARY KEY(fk_i_category_id, fk_c_locale_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oc_t_admin (pk_i_id INT UNSIGNED AUTO_INCREMENT NOT NULL, s_name VARCHAR(100) NOT NULL, s_username VARCHAR(40) NOT NULL, s_password CHAR(60) NOT NULL, s_email VARCHAR(100) DEFAULT NULL, s_secret VARCHAR(40) DEFAULT NULL, b_moderator TINYINT(1) DEFAULT \'0\' NOT NULL, UNIQUE INDEX s_username (s_username), UNIQUE INDEX s_email (s_email), PRIMARY KEY(pk_i_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE oc_t_user_email_tmp ADD CONSTRAINT FK_D6F56EEFC1941940 FOREIGN KEY (fk_i_user_id) REFERENCES oc_t_user (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_keywords ADD CONSTRAINT FK_F491F816D58090D FOREIGN KEY (fk_c_locale_code) REFERENCES oc_t_locale (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_keywords ADD CONSTRAINT FK_F491F81D5760A85 FOREIGN KEY (fk_i_category_id) REFERENCES oc_t_category (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_keywords ADD CONSTRAINT FK_F491F81ED56A87A FOREIGN KEY (fk_i_city_id) REFERENCES oc_t_city (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_plugin_category ADD CONSTRAINT FK_D69D931FD5760A85 FOREIGN KEY (fk_i_category_id) REFERENCES oc_t_category (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_city_stats ADD CONSTRAINT FK_246EF6CDED56A87A FOREIGN KEY (fk_i_city_id) REFERENCES oc_t_city (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_comment ADD CONSTRAINT FK_8FD5E7F17495988B FOREIGN KEY (fk_i_item_id) REFERENCES oc_t_item (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_comment ADD CONSTRAINT FK_8FD5E7F1C1941940 FOREIGN KEY (fk_i_user_id) REFERENCES oc_t_user (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_description ADD CONSTRAINT FK_DC2201E07495988B FOREIGN KEY (fk_i_item_id) REFERENCES oc_t_item (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_description ADD CONSTRAINT FK_DC2201E06D58090D FOREIGN KEY (fk_c_locale_code) REFERENCES oc_t_locale (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_item_stats ADD CONSTRAINT FK_4D434A4A7495988B FOREIGN KEY (fk_i_item_id) REFERENCES oc_t_item (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_category_stats ADD CONSTRAINT FK_CC4A96E6D5760A85 FOREIGN KEY (fk_i_category_id) REFERENCES oc_t_category (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_city ADD CONSTRAINT FK_C8C5AE381FD87D5B FOREIGN KEY (fk_i_region_id) REFERENCES oc_t_region (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_city ADD CONSTRAINT FK_C8C5AE38F100A58B FOREIGN KEY (fk_c_country_code) REFERENCES oc_t_country (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_category ADD CONSTRAINT FK_A35AB31EF584B67E FOREIGN KEY (fk_i_parent_id) REFERENCES oc_t_category (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_meta_categories ADD CONSTRAINT FK_EA012EF4D5760A85 FOREIGN KEY (fk_i_category_id) REFERENCES oc_t_category (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_meta_categories ADD CONSTRAINT FK_EA012EF4B2E8DB21 FOREIGN KEY (fk_i_field_id) REFERENCES oc_t_meta_fields (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_location ADD CONSTRAINT FK_D03BC7877495988B FOREIGN KEY (fk_i_item_id) REFERENCES oc_t_item (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_location ADD CONSTRAINT FK_D03BC787F100A58B FOREIGN KEY (fk_c_country_code) REFERENCES oc_t_country (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_item_location ADD CONSTRAINT FK_D03BC7871FD87D5B FOREIGN KEY (fk_i_region_id) REFERENCES oc_t_region (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_location ADD CONSTRAINT FK_D03BC787ED56A87A FOREIGN KEY (fk_i_city_id) REFERENCES oc_t_city (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_location ADD CONSTRAINT FK_D03BC787D3563AA2 FOREIGN KEY (fk_i_city_area_id) REFERENCES oc_t_city_area (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_country_stats ADD CONSTRAINT FK_120FF4C7F100A58B FOREIGN KEY (fk_c_country_code) REFERENCES oc_t_country (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_region ADD CONSTRAINT FK_7CB7B427F100A58B FOREIGN KEY (fk_c_country_code) REFERENCES oc_t_country (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_user ADD CONSTRAINT FK_680D7A45F100A58B FOREIGN KEY (fk_c_country_code) REFERENCES oc_t_country (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_user ADD CONSTRAINT FK_680D7A451FD87D5B FOREIGN KEY (fk_i_region_id) REFERENCES oc_t_region (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_user ADD CONSTRAINT FK_680D7A45ED56A87A FOREIGN KEY (fk_i_city_id) REFERENCES oc_t_city (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_user ADD CONSTRAINT FK_680D7A45D3563AA2 FOREIGN KEY (fk_i_city_area_id) REFERENCES oc_t_city_area (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_user_description ADD CONSTRAINT FK_95519043C1941940 FOREIGN KEY (fk_i_user_id) REFERENCES oc_t_user (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_user_description ADD CONSTRAINT FK_955190436D58090D FOREIGN KEY (fk_c_locale_code) REFERENCES oc_t_locale (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_item_resource ADD CONSTRAINT FK_3234BA5A7495988B FOREIGN KEY (fk_i_item_id) REFERENCES oc_t_item (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_meta ADD CONSTRAINT FK_90B89217495988B FOREIGN KEY (fk_i_item_id) REFERENCES oc_t_item (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item_meta ADD CONSTRAINT FK_90B8921B2E8DB21 FOREIGN KEY (fk_i_field_id) REFERENCES oc_t_meta_fields (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_pages_description ADD CONSTRAINT FK_196DF09DB6C501B6 FOREIGN KEY (fk_i_pages_id) REFERENCES oc_t_pages (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_pages_description ADD CONSTRAINT FK_196DF09D6D58090D FOREIGN KEY (fk_c_locale_code) REFERENCES oc_t_locale (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_region_stats ADD CONSTRAINT FK_FFDFF77B1FD87D5B FOREIGN KEY (fk_i_region_id) REFERENCES oc_t_region (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item ADD CONSTRAINT FK_FA858912C1941940 FOREIGN KEY (fk_i_user_id) REFERENCES oc_t_user (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item ADD CONSTRAINT FK_FA858912D5760A85 FOREIGN KEY (fk_i_category_id) REFERENCES oc_t_category (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_item ADD CONSTRAINT FK_FA858912DE7A324D FOREIGN KEY (fk_c_currency_code) REFERENCES oc_t_currency (pk_c_code)');
        $this->addSql('ALTER TABLE oc_t_city_area ADD CONSTRAINT FK_2213D9EFED56A87A FOREIGN KEY (fk_i_city_id) REFERENCES oc_t_city (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_category_description ADD CONSTRAINT FK_63067C10D5760A85 FOREIGN KEY (fk_i_category_id) REFERENCES oc_t_category (pk_i_id)');
        $this->addSql('ALTER TABLE oc_t_category_description ADD CONSTRAINT FK_63067C106D58090D FOREIGN KEY (fk_c_locale_code) REFERENCES oc_t_locale (pk_c_code)');

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE oc_t_keywords DROP FOREIGN KEY FK_F491F816D58090D');
        $this->addSql('ALTER TABLE oc_t_item_description DROP FOREIGN KEY FK_DC2201E06D58090D');
        $this->addSql('ALTER TABLE oc_t_user_description DROP FOREIGN KEY FK_955190436D58090D');
        $this->addSql('ALTER TABLE oc_t_pages_description DROP FOREIGN KEY FK_196DF09D6D58090D');
        $this->addSql('ALTER TABLE oc_t_category_description DROP FOREIGN KEY FK_63067C106D58090D');
        $this->addSql('ALTER TABLE oc_t_city DROP FOREIGN KEY FK_C8C5AE38F100A58B');
        $this->addSql('ALTER TABLE oc_t_item_location DROP FOREIGN KEY FK_D03BC787F100A58B');
        $this->addSql('ALTER TABLE oc_t_country_stats DROP FOREIGN KEY FK_120FF4C7F100A58B');
        $this->addSql('ALTER TABLE oc_t_region DROP FOREIGN KEY FK_7CB7B427F100A58B');
        $this->addSql('ALTER TABLE oc_t_user DROP FOREIGN KEY FK_680D7A45F100A58B');
        $this->addSql('ALTER TABLE oc_t_meta_categories DROP FOREIGN KEY FK_EA012EF4B2E8DB21');
        $this->addSql('ALTER TABLE oc_t_item_meta DROP FOREIGN KEY FK_90B8921B2E8DB21');
        $this->addSql('ALTER TABLE oc_t_keywords DROP FOREIGN KEY FK_F491F81ED56A87A');
        $this->addSql('ALTER TABLE oc_t_city_stats DROP FOREIGN KEY FK_246EF6CDED56A87A');
        $this->addSql('ALTER TABLE oc_t_item_location DROP FOREIGN KEY FK_D03BC787ED56A87A');
        $this->addSql('ALTER TABLE oc_t_user DROP FOREIGN KEY FK_680D7A45ED56A87A');
        $this->addSql('ALTER TABLE oc_t_city_area DROP FOREIGN KEY FK_2213D9EFED56A87A');
        $this->addSql('ALTER TABLE oc_t_item DROP FOREIGN KEY FK_FA858912DE7A324D');
        $this->addSql('ALTER TABLE oc_t_keywords DROP FOREIGN KEY FK_F491F81D5760A85');
        $this->addSql('ALTER TABLE oc_t_plugin_category DROP FOREIGN KEY FK_D69D931FD5760A85');
        $this->addSql('ALTER TABLE oc_t_category_stats DROP FOREIGN KEY FK_CC4A96E6D5760A85');
        $this->addSql('ALTER TABLE oc_t_category DROP FOREIGN KEY FK_A35AB31EF584B67E');
        $this->addSql('ALTER TABLE oc_t_meta_categories DROP FOREIGN KEY FK_EA012EF4D5760A85');
        $this->addSql('ALTER TABLE oc_t_item DROP FOREIGN KEY FK_FA858912D5760A85');
        $this->addSql('ALTER TABLE oc_t_category_description DROP FOREIGN KEY FK_63067C10D5760A85');
        $this->addSql('ALTER TABLE oc_t_city DROP FOREIGN KEY FK_C8C5AE381FD87D5B');
        $this->addSql('ALTER TABLE oc_t_item_location DROP FOREIGN KEY FK_D03BC7871FD87D5B');
        $this->addSql('ALTER TABLE oc_t_user DROP FOREIGN KEY FK_680D7A451FD87D5B');
        $this->addSql('ALTER TABLE oc_t_region_stats DROP FOREIGN KEY FK_FFDFF77B1FD87D5B');
        $this->addSql('ALTER TABLE oc_t_user_email_tmp DROP FOREIGN KEY FK_D6F56EEFC1941940');
        $this->addSql('ALTER TABLE oc_t_item_comment DROP FOREIGN KEY FK_8FD5E7F1C1941940');
        $this->addSql('ALTER TABLE oc_t_user_description DROP FOREIGN KEY FK_95519043C1941940');
        $this->addSql('ALTER TABLE oc_t_item DROP FOREIGN KEY FK_FA858912C1941940');
        $this->addSql('ALTER TABLE oc_t_pages_description DROP FOREIGN KEY FK_196DF09DB6C501B6');
        $this->addSql('ALTER TABLE oc_t_item_comment DROP FOREIGN KEY FK_8FD5E7F17495988B');
        $this->addSql('ALTER TABLE oc_t_item_description DROP FOREIGN KEY FK_DC2201E07495988B');
        $this->addSql('ALTER TABLE oc_t_item_stats DROP FOREIGN KEY FK_4D434A4A7495988B');
        $this->addSql('ALTER TABLE oc_t_item_location DROP FOREIGN KEY FK_D03BC7877495988B');
        $this->addSql('ALTER TABLE oc_t_item_resource DROP FOREIGN KEY FK_3234BA5A7495988B');
        $this->addSql('ALTER TABLE oc_t_item_meta DROP FOREIGN KEY FK_90B89217495988B');
        $this->addSql('ALTER TABLE oc_t_item_location DROP FOREIGN KEY FK_D03BC787D3563AA2');
        $this->addSql('ALTER TABLE oc_t_user DROP FOREIGN KEY FK_680D7A45D3563AA2');
        $this->addSql('DROP TABLE oc_t_user_email_tmp');
        $this->addSql('DROP TABLE oc_t_keywords');
        $this->addSql('DROP TABLE oc_t_locale');
        $this->addSql('DROP TABLE oc_t_log');
        $this->addSql('DROP TABLE oc_t_alerts_sent');
        $this->addSql('DROP TABLE oc_t_plugin_category');
        $this->addSql('DROP TABLE oc_t_cron');
        $this->addSql('DROP TABLE oc_t_country');
        $this->addSql('DROP TABLE oc_t_city_stats');
        $this->addSql('DROP TABLE oc_t_item_comment');
        $this->addSql('DROP TABLE oc_t_item_description');
        $this->addSql('DROP TABLE oc_t_item_stats');
        $this->addSql('DROP TABLE oc_t_ban_rule');
        $this->addSql('DROP TABLE oc_t_category_stats');
        $this->addSql('DROP TABLE oc_t_meta_fields');
        $this->addSql('DROP TABLE oc_t_city');
        $this->addSql('DROP TABLE oc_t_alerts');
        $this->addSql('DROP TABLE oc_t_currency');
        $this->addSql('DROP TABLE oc_t_category');
        $this->addSql('DROP TABLE oc_t_meta_categories');
        $this->addSql('DROP TABLE oc_t_item_location');
        $this->addSql('DROP TABLE oc_t_country_stats');
        $this->addSql('DROP TABLE oc_t_region');
        $this->addSql('DROP TABLE oc_t_preference');
        $this->addSql('DROP TABLE oc_t_user');
        $this->addSql('DROP TABLE oc_t_user_description');
        $this->addSql('DROP TABLE oc_t_latest_searches');
        $this->addSql('DROP TABLE oc_t_widget');
        $this->addSql('DROP TABLE oc_t_item_resource');
        $this->addSql('DROP TABLE oc_t_item_meta');
        $this->addSql('DROP TABLE oc_t_locations_tmp');
        $this->addSql('DROP TABLE oc_t_pages');
        $this->addSql('DROP TABLE oc_t_pages_description');
        $this->addSql('DROP TABLE oc_t_region_stats');
        $this->addSql('DROP TABLE oc_t_item');
        $this->addSql('DROP TABLE oc_t_city_area');
        $this->addSql('DROP TABLE oc_t_category_description');
        $this->addSql('DROP TABLE oc_t_admin');
    }
}
