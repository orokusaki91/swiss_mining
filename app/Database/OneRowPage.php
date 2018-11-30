<?php

namespace App\Database;

use Illuminate\Database\Eloquent\Model;

class OneRowPage extends Model
{
    protected $table = 'one_row_page';
    protected $guarded = ['id'];
}
