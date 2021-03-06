<?php

namespace Confee\Domains\Users\Database\Seeders;
use Illuminate\Database\Seeder;
use Confee\Domains\Users\User;

/**
 * Class UserSeeder.
 */
class UserSeeder extends Seeder
{
  public function run()
  {
    factory(User::class)->times(30)->create();
  }

}
