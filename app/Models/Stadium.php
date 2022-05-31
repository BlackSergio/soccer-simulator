<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $capacity
 */
class Stadium extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'stadiums';
}
