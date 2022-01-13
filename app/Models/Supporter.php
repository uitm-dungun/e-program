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
        return $this->belongsTo(PaperworkSupport::class, 'paperwork_support_id');
    }

    public function scopeIsAuth($query)
    {
        return $query->where('user_id', auth()->user()->id);
    }
}
