<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mas_faculty extends Model
{
    protected $table='mas_faculty';
    protected $fillble=['faculty_id',
        'faculty_code',
        'ref_faculty_id',
        'faculty_name'];
}
