<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $table='candidatures';
    protected $primaryKey = 'id_candidature';

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function offre()
    {
        return $this->belongsTo(Offre::class, 'id_offre');
    }
}
