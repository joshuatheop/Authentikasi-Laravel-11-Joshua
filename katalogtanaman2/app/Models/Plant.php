<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    // Menambahkan kolom yang bisa diisi melalui mass assignment
    protected $fillable = ['name', 'type', 'care_instructions'];
}
