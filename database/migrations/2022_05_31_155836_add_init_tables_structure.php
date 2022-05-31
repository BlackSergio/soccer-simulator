<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('referees', function (Blueprint $table) {
            $table->integerIncrements('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['male', 'female']);
            $table->tinyInteger('age')->unsigned();
        });

        Schema::create('soccer_players', function (Blueprint $table) {
            $table->integerIncrements('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->tinyInteger('age')->unsigned();
            $table->integer('team_id')->unsigned()->index();
        });

        Schema::create('team_fans', function (Blueprint $table) {
            $table->integerIncrements('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->tinyInteger('age')->unsigned();
            $table->integer('team_id')->unsigned()->index();
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->integerIncrements('id')->unsigned();
            $table->string('name');
            $table->string('country');
        });

        Schema::create('soccer_matches', function (Blueprint $table) {
            $table->integerIncrements('id')->unsigned();
            $table->integer('stadium_id')->index();
            $table->integer('referee_id');
            $table->dateTime('match_date');
            $table->integer('first_team')->unsigned();
            $table->integer('second_team')->unsigned();
            $table->tinyInteger('score_first_team')->unsigned()->nullable();
            $table->tinyInteger('score_second_team')->unsigned()->nullable();
            $table->jsonb('visitors')->nullable();
            $table->smallInteger('duration_sec')->unsigned();
        });

        Schema::create('stadiums', function (Blueprint $table) {
            $table->integerIncrements('id')->unsigned();
            $table->string('name');
            $table->mediumInteger('capacity')->unsigned();
        });

        Schema::create('match_statistics', function (Blueprint $table) {
            $table->integerIncrements('id')->unsigned();
            $table->integer('soccer_match_id');
            $table->string('event');
            $table->string('description');
            $table->jsonb('participants');
            $table->dateTime('occurred_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('referees');
        Schema::dropIfExists('soccer_players');
        Schema::dropIfExists('team_fans');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('soccer_matches');
        Schema::dropIfExists('stadiums');
        Schema::dropIfExists('match_statistics');
    }
};
