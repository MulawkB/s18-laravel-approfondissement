<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $family = Group::create(['name' => 'Family']);

        $user = User::where('email','test@example.com')->first();

        $user->groups()->attach($family);
        
    }
}
