<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->first_name = 'Super';
        $user->last_name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin');
        $user->save();

        $user->assignRole('admin');
    }
}
