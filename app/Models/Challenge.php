<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{

    public const CATEGORIES = [
        'Ciberseguridad',
        'Ingeniería social',
        'OSINT',
        'SQL injection',
        'Criptografía',
        'Estenografía',
        'Forense',
    ];

    use HasFactory;

    protected $fillable = [
        "question",
        "category",
        "answer",
    ];

    protected $table = 'challenges';
}
