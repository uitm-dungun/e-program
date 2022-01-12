<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperworkSupport extends Model
{
    use HasFactory;

    public function supporters()
    {
        return $this->hasMany(Supporter::class);
    }
}
