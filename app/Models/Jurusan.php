<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'jenjang'];

    public function matakuliah()
    {
        return $this->hasMany(Matakuliah::class,'jurusan_id', 'id');
    }
}