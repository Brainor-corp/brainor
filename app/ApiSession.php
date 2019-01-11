<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiSession extends Model
{
    protected $fillable = ['user_id', 'key', 'expire'];
}
