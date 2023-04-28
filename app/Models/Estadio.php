<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    public function partidos()
    {
        return $this->hasMany(Partido::class, 'estadio_id');
    }
}
