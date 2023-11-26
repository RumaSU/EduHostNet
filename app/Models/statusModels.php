<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusModels extends Model
{
    use HasFactory;
    protected $table = "konten";
    protected $guarded = ['konten_id'];
    protected $primaryKey = "konten_id";
    protected $fillable = [
        'titleKonten', 'konten', 'users_id'
    ];
}
