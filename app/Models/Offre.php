<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $table ='offres';
    protected $primaryKey = 'id_offre';
    protected $fillable = ['titre_offre', 'description_offre', 'ville','date_publication','date_limite', 'id_entreprise'];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class, 'id_entreprise');
    }

    public function candidatures()
    {
        return $this->hasMany(Candidature::class,'id_offre');
    }

    

    public function emploi()
    {
        return $this->hasOne(Emploi::class, 'id_offre');
    }

    public function stage()
    {
        return $this->hasOne(Stage::class, 'id_offre');
    }

}
