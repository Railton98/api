<?php

namespace Confee\Domains\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;
use Confee\Domains\Users\Database\Migrations\CreateUsersTable;
use Confee\Domains\Users\Database\Migrations\CreatePasswordResetsTable;

/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
  use HasMigrations;

  public function register()
  {
    $this->registerMigrations();
  }

  protected function registerMigrations()
  {
    $this->migrations([
      CreateUsersTable::class,
      CreatePasswordResetsTable::class,
    ]);
  }
}
