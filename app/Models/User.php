<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        "firstname",
        "lastname",
        "email",
        "password",
        "university",
        "faculty",
        "semester",
        "bornDate",
        "gender",
        "role",
    ];
    protected $table = "users";
}
