<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'name_arab',
        'name_latin',
        'name_id',
        'ayat_count',
        'place',
        'description',
    ];
    protected $hidden = [];
    protected $casts = [];
    public function ayats()
    {
        return $this->hasMany(Ayat::class);
    }
}
