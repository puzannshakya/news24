<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //Table name
    protected $table = 'news';

    //Primary key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}
