<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    protected $table = 'school';

    protected $fillable = [
        'name',
        'description',
        'street',
    ];
}
