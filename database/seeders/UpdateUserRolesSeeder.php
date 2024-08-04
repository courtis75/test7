<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UpdateUserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        User::where('email', 'scourtis@myune.edu.au')->update(['role' => 'admin']);
        User::whereNull('role')->update(['role' => 'author']);
    }
}
