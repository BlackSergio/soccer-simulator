<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

/**
 * @property int $id
 * @property int $soccer_match_id
 * @property string $event
 * @property string $decription
 * @property array $participants
 * @property DateTimeInterface $occurred_at;
 */
class MatchStatistics extends Model
{
    public $timestamps = false;

    protected $table = 'match_statistics';
}
