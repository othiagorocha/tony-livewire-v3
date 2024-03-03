<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::create([
      'name' => 'Admin do App',
      'email' => 'admin@admin.com',
      'password' => 'admin',
      // Adicione outros campos conforme necessário
    ]);
  }
}
