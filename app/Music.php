<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    const NUMBER = 'id';
    const NAME = 'name_of_song';
    const TYPE = 'type';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $attributes = [
        NUMBER,
        NAME,
        TYPE,
        CREATED_AT,
        UPDATED_AT  
    ];
}
