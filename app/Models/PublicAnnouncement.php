<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicannouncement extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'setdate', 'image', 'description', 'linkurl',];
}
