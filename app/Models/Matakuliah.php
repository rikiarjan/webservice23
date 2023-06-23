<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliahs';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'semester', 'sks_teori', 'sks_praktikum', 'jurusan_id'];
    
    // relasi table dari product dengan jurusan_id(foreign_key)
    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
}