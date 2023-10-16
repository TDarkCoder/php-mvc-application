<?php

use TDarkCoder\Framework\Application;
use TDarkCoder\Framework\Enums\MigrationFlags;

require_once __DIR__ . '/vendor/autoload.php';
$config = require_once __DIR__ . '/bootstrap.php';

$flag = $argv[1] ?? null;
$flags = array_map(fn($flag): string => $flag->value, MigrationFlags::cases());

if (!in_array($flag, $flags)) {
    echo 'Need to add one following flags: ' . implode(', ', $flags);

    exit(1);
}

$app = new Application(__DIR__, $config);

match ($flag) {
    MigrationFlags::Up->value => $app->database->runMigrations(),
    MigrationFlags::Down->value => $app->database->rollbackMigrations(),
    default => $app->database->refreshDatabase(),
};
