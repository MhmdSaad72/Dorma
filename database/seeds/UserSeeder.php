<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::create(['name' => 'Administrator']);
      Role::create(['name' => 'User']);
      $user = User::create([
        'name' => 'Mr.Admin',
        'email' => 'admin@admin.com',
        'email_verified_at' => now(),
        'password' =>Hash::make(123456789),
        'remember_token' =>Str::random(10),
      ]);
      $user->assignRole('Administrator');
    }
}
