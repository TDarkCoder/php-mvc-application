<?php

use TDarkCoder\Framework\Database\Migration;

return new class implements Migration {

    public function up(): string
    {
        return "CREATE TABLE IF NOT EXISTS `users` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `firstName` VARCHAR(255) NOT NULL,
            `lastName` VARCHAR(255) NOT NULL,
            `email` VARCHAR(255) NOT NULL UNIQUE,
            `password` VARCHAR(255) NOT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
    }

    public function down(): string
    {
        return "DROP TABLE IF EXISTS `users`";
    }
};