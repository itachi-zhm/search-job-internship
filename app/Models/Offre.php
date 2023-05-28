<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $table ='offres';
    protected $primaryKey = 'id_offre';

    public function entreprise()
{
    return $this->belongsTo(Entreprise::class, 'id_entreprise');
}
}
