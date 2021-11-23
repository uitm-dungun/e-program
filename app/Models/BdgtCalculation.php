<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Double;

class BdgtCalculation extends Model
{
    use HasFactory;
}

{!-- java
    int kuantiti=0;
    double tot=0;
    double unit=0;
    double alltot=0;
    tot=unit*kuantiti;

    for(i=0;i<=<getcolumnbudget;i++)
    {
        alltot=tot++;
    }
      
    println=alltot!
    
    --}