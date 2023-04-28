<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $table = 'partidos';

    protected $fillable = [
        'partido',
        'estadio_id',
    ];

    public function estadio()
    {
        return $this->belongsTo(Estadio::class, 'estadio_id');
    }
}

