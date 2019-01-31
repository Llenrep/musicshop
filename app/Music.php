<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    //Table Name
    protected $table = 'music';

    //Primary Key
    public $primaryKey = 'id';

    //timestamps
    public $timestamps = true;

    //User
    protected $user = 'user';
    
    // const NUMBER = 'id';
    // const NAME = 'name_of_song';
    // const TYPE = 'type';
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';

    // protected $attributes = [
    //     NUMBER,
    //     NAME,
    //     TYPE,
    //     CREATED_AT,
    //     UPDATED_AT  
    // ];
}
