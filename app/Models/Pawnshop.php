<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pawnshop extends Model
{
    use HasFactory;
    protected $table = 'pawnshops';
    protected $fillable = [
        'nik',
        'nama',
        'JK',
        'no_telp',
        'umur',
        'foto',
    ];

    public function response()
    {
        return $this->hasOne
        (Response::class);
    }
}
?>