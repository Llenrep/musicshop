<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    const EMAIL = 'email';
    const TOKEN = 'token';
    const CREATED_AT = 'created_at';

    protected $attributes = [
        EMAIL,
        TOKEN,
        CREATED_AT
    ];

}
