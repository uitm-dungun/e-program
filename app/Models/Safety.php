<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Safety extends Model
{
    use HasFactory;

    public function paperworks()
    {
        return $this->hasOne(Paperwork::class)->latestOfMany();
    }
}
