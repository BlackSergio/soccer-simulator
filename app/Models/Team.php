<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $country
 */
class Team extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'teams';
}
