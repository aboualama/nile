<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'title', 'description', 'mobile', 'mail', 'address', 'photo', 'video', 'slid1', 'slid2', 'slid3', 'slid4',
    ];
} 