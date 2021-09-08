<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magang extends Model
{
    use HasFactory;
    protected $table = 'magang';
    protected $fillable = ['nama', 'nama_perusahaan', 'lokasi_magang'];

    public function statuss()
    {
        return $this->belongsTo('App\Models\M_status','status');
    }
    public function penilaian()
    {
        return $this->belongsToMany(penilaian::class)->withPivot(['nilai'])->withTimeStamps();
    }
    public function pembimbing()
    {
        return $this->belongsToMany(pembimbing::class)->withPivot(['nilai'])->withTimeStamps();
    }
    public function penguji()
    {
        return $this->belongsToMany(penguji::class)->withPivot(['nilai'])->withTimeStamps();
    }
}
