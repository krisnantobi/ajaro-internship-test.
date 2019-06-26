<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    // Table Name
    protected $table = 'items';
    // Primary key
    public $primaryKey = 'id';
    // Timetamp
    public $timetamp = true;
}
