<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    public function class()
    {
        return $this->hasOne(Classes::class, 'students_id', 'id');
    }
}
