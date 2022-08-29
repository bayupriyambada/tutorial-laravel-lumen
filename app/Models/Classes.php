<?php

namespace App\Models;

use App\Models\Students;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'class';

    public function student()
    {
        return $this->belongsTo(Students::class, 'students_id', 'id');
    }
}
