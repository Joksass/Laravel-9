<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    use HasFactory;
    protected $fillable = [
        'Pavadinimas','Autorius','Isleista','Aprasymas'
    ];
    
    use SoftDeletes;
}
