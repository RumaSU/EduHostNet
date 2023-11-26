<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersImageModels extends Model
{
    use HasFactory;
    protected $table = "users_image";
    protected $fillable = [
        'name_file', 'users_id'
    ];
}
