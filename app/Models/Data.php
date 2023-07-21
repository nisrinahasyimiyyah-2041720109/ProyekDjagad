<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    use SoftDeletes,HasFactory;

    public $table = 'data';

    protected $fillable = [
        'user_id',
        'telepon',
        'alamat',
        'kavling',
        'tipe',
        'spk',
        'progres',
        'cicilan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
