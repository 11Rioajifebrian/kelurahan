<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    use HasFactory;

    protected $table = 'rt';

    protected $fillable = [
        'no_rt',
        'alamat',
        'no_hp',
    ];
}
