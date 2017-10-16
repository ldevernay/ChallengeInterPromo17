<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    DB::table('roles')->insert([
      'user_role_id' => 1,
      'name' => 'admin',
    ]);
    DB::table('roles')->insert([
      'user_role_id' => 2,
      'name' => 'learner',
    ]);
    DB::table('roles')->insert([
      'user_role_id' => 3,
      'name' => 'former',
    ]);
  }
}
