<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = 'jn';
        $user->email = '1176300975@qq.com';
        $user->is_admin = true;
        $user->save();
    }
}
