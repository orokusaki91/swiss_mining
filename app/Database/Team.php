<?php

namespace App\Database;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';
    protected $guarded = ['id'];
}
