<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article1 extends Model
{
    protected $fillable = ['title', 'body'];
    protected $table = 'article1s';
}
