<?php

namespace Confee\Domains\Users\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Confee\Support\Database\Migration;

/**
 * Class CreateUsersTable
 */
class CreateUsersTable extends Migration
{

  public function up()
  {
    $this->schema->create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password')->nullable();
        $table->rememberToken();
        $table->timestamps();
    });
  }

  public function down()
  {
    $this->schema->drop('users');
  }
}
