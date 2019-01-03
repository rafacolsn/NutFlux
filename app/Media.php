<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = "medias";
    protected $fillable = ['title', 'summary', 'year', 'trailer', 'is_serie', 'poster', 'director', 'producer'];
    
    public function actors()
    {
        return $this->belongsToMany('App\Actor', 'media_actor', 'media_id', 'actor_id');
    }

    
}
