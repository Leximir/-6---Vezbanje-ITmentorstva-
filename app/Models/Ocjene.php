<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ocjene extends Model
{
    protected $table = 'ocjene';
    protected $fillable = [
        'predmet' , 'ocjena' , 'profesor' , 'user_id'
    ];


}
