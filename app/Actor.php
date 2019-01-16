<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model {
    protected $table = 'actors';
    protected $fillable = ['firstname', 'lastname', 'picture'];

    public function medias() {

            return $this->belongsToMany('App\Media', 'media_actor', 'actor_id', 'media_id');

    }
}

?>
