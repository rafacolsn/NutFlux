<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model {
    protected $fillable = ['firstname', 'lastname', 'picture'];
} 

?>