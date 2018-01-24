<?php

namespace Confee\Domains\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;
use Confee\Domains\Users\Database\Migrations\CreateUsersTable;
use Confee\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use Confee\Domains\Users\Database\Factories\UserFactory;

/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
  use HasMigrations;

  public function register()
  {
    $this->registerMigrations();
    $this->registerFactories();
  }

  protected function registerMigrations()
  {
    $this->migrations([
      CreateUsersTable::class,
      CreatePasswordResetsTable::class,
    ]);
  }

  protected function registerFactories()
  {
    (new UserFactory())->define();
  }

}
