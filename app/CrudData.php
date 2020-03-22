<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudData extends Model
{
    protected  $fillable=[
        'name',
        'phone',
        'email',
        'address',
        'image'
    ];
}
