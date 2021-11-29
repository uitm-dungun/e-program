<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpaperworkPaperwork extends Model
{
    use HasFactory;

    protected $casts = [
        'budgets' => 'array',
    ];

    // public function getBudget() {
    //     return $this->total_participants * 5.2;
    // }
}
