<?php
declare(strict_types=1);
namespace App\Connection;

class Config
{
  public static function getDatabaseDsn(): string
  {
    return 'mysql:host=localhost;dbname=php_course';
  }

  public static function getDatabaseUser(): string
  {
    return 'root';
  }

  public static function getDatabasePassword(): string
  {
      return 'alisa1706';
  }
}