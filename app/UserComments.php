<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComments extends Model
{
    const ID = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const PROFILE_PIC = 'profile_picture';
    const SONG = 'on_song';
    const MESSAGE = 'message';

    protected $attributes = [
        ID,
        CREATED_AT,
        UPDATED_AT,
        PROFILE_PIC,
        SONG,
        MESSAGE
    ];

}
