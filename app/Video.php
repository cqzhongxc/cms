<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Video extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'video';
    protected $primaryKey = '_id';
    protected $fillable = ['id', 'title', 'type', 'tags'];
}
