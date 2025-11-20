<?php

namespace Database\Seeders;

use App\Models\Shift;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!app()->isLocal()) {
            return;
        }

        $this->command->info('Creating admin user');
        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@atm.test',
            'admin_type' => 'superadmin'
        ]);

        $userCount = 10;
        $this->command->info("Creating {$userCount} users");
        User::factory($userCount)->create();


        $this->command->info("Giving each user 10 shifts and a new one started");
        User::query()->each(function (User $user) {
            Shift::factory(10)->create(['user_id' => $user->id]);
            $user->startShift();
        });
    }
}
