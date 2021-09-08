<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
    use HasFactory;
    protected $table = 'penilaian';
    protected $fillable = ['kode', 'nama'];

    public function magang()
    {
        return $this->belongsToMany(magang::class)->withPivot(['nilai']);
    }
}
