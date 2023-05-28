<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $table='stages'; 

    //--------récupération des données d'offre associées à ce stage 
    public function offre()
    {
        return $this->belongsTo(Offre::class, 'id_offre');
    }
}
