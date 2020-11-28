<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foreign extends Model
{
    use HasFactory;

    /**
     * Fillable resource items.
     * @var Array
     */
    protected $fillable = array(
        'name', 'phone', 'email'
    );
}
