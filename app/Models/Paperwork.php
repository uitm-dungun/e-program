<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paperwork extends Model
{
    use HasFactory;

    protected $casts = [
        'budgets' => 'array',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function support()
    {
        return $this->hasOne(PaperworkSupport::class);
    }
}
