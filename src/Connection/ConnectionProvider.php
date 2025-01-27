<?php
declare(strict_types=1);

namespace App\Connection;

class ConnectionProvider
{
  public static function connectDatabase(): \PDO
  {
    return new \PDO(Config::getDatabaseDsn(), Config::getDatabaseUser(), Config::getDatabasePassword());
  }
}