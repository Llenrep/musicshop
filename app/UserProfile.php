<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    const ID = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const BIO = 'bio';

    protected $attributes = [
        ID,
        CREATED_AT,
        UPDATED_AT,
        BIO
    ];
}
