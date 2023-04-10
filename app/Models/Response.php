<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pawnshops;

class Response extends Model
{
    use HasFactory;
    protected $table = 'responses';
    protected $fillable = [
        'pawnshop_id',
        'status',
        'pesan',
    ];


    public function pawnshops() 
    {
        return $this->belongsTo 
        (Pawnshops::class);
    }
}
?>