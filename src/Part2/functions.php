<?php declare(strict_types=1);

namespace IconLanguageServices\SoftwareEngineerTechnicalSqlTest2021\Part2;

use PDO;

/**
 * Builds the SQLite database
 *
 * @param PDO $pdo
 */
function build_database(PDO $pdo): void
{
    $schema = file_get_contents(__DIR__ . '/../../schema/tables.sql');

    foreach (explode(';', $schema) as $statement) {
        $pdo->exec($statement);
    }

    $data = file_get_contents(__DIR__ . '/../../schema/data.sql');

    foreach (explode(';', $data) as $statement) {
        $pdo->exec($statement);
    }
}
