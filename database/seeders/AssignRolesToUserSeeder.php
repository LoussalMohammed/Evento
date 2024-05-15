<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AssignRolesToUserSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'mohammed@gmail.com')->first();
        $user->assignRole('admin');
    }
}
