<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

/**
 * @property int $id
 * @property int $stadium_id
 * @property int $referee_id
 * @property DateTimeInterface $matchDate
 * @property int $first_team
 * @property int $second_team
 * @property int|null $score_first_team
 * @property int|null $score_second_team
 * @property array|null $visitors
 * @property int $duration_sec
 */
class SoccerMatch extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'matches';
}
