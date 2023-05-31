<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $table='stages'; 
    protected $primaryKey = 'id_stage';
    protected $fillable = ['remuneration_stage', 'duree_stage'];

    //--------récupération des données d'offre associées à ce stage 
    public function offre()
    {
        return $this->belongsTo(Offre::class, 'id_offre');
    }
}
