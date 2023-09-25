<?php

use TDarkCoder\Framework\Migration;

return new class implements Migration {

    public function up(): string
    {
        return "
            CREATE TABLE IF NOT EXISTS `access_tokens` (
                `id` INT PRIMARY KEY AUTO_INCREMENT,
                `user_id` INT NOT NULL,
                `token` VARCHAR(255) NOT NULL UNIQUE,
                `device` VARCHAR(255) NOT NULL,
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );

            CREATE INDEX `index_access_tokens_token` ON `access_tokens` (`token`);
        ";
    }

    public function down(): string
    {
        return "DROP TABLE IF EXISTS `access_tokens`";
    }
};