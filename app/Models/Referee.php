<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property int $age
 */
class Referee extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'referees';
}
