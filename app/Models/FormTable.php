<?php

namespace App\Models;

use App\Models\FormTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'link',
        'description',
        'image',
        
    ];
}
