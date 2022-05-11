<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    use HasFactory;
    protected $with = ['user'];
    protected $table = 'perjalanans';
    protected $fillable = [
        'user_id',
        'tanggal',
        'jam',
        'lokasi',
        'suhu',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
