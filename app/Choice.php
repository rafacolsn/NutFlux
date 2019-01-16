<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = 'choices';
    protected $fillable = [ 'user_id', 'media_id', 'type' ];


}
