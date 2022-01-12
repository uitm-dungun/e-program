<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function support()
    {
        return $this->belongsTo(PaperworkSupport::class);
    }
}
