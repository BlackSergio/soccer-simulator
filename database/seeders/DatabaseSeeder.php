<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Referee;
use App\Models\SoccerPlayer;
use App\Models\Stadium;
use App\Models\Team;
use App\Models\TeamFan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Referee::factory(10)->create();
        Team::factory(10)->create();
        SoccerPlayer::factory(200)->create();
        TeamFan::factory(1000)->create();
        Stadium::factory(100)->create();
    }
}
