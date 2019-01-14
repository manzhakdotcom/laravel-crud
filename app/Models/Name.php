<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    public function getFioAttribute()
    {
        return 'FIO: ' . $this->first_name;
    }
}
