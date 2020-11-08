<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'description',
        'Echeance',
        'titre'
      ];
      // public function getRouteKeyName()
      // {
      //     return 'slug';
      // }
}
