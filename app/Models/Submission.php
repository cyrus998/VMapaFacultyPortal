<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kayandra\Hashidable\Hashidable;
class Submission extends Model
{
    use Hashidable;
    use HasFactory;

    protected $fillable = [
        'name', 'city', 'yearlevel', 'image', 'form137'
    ];
}
