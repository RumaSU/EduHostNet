<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class UsersModel extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;
    protected $table = "users";
    protected $guarded = ['users_id'];
    protected $guard = 'web';
    protected $primaryKey = "users_id";
    protected $fillable = [
        'username', 'password'
    ];
}
