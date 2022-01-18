<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paperwork extends Model
{
    use HasFactory;

    protected $casts = [
        'budgets' => 'array',
        'officers' => 'array',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function support()
    {
        return $this->hasOne(PaperworkSupport::class);
    }

    public function supporters()
    {
        return $this->hasManyThrough(
            Supporter::class,
            PaperworkSupport::class,
            'paperwork_id',
            'paperwork_support_id',
        );
    }

    // TODO To review a problematic scope
    public function scopeSupporterIsUser()
    {
        return $this->supporters()->isAuth();
    }
}
