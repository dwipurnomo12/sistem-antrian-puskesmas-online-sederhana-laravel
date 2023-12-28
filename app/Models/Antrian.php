<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $fillable = ['no_antrian', 'nama', 'alamat', 'jenis_kelamin', 'no_hp', 'no_ktp', 'tgl_lahir', 'pekerjaan', 'poli', 'is_call', 'tanggal_antrian', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
