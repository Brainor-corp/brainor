<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fear extends Model
{

    protected $fillable = [
        'fear_title', 'fear_answer', 'published_at',
    ];

}
