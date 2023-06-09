<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $table='emplois';
    protected $primaryKey = 'id_emploi';
    protected $fillable = ['salaire', 'type_contrat'];

    //--------récupération des données d'offre associées à cet emploi 
    public function offre()
    {
        return $this->belongsTo(Offre::class, 'id_offre');
    }
}
