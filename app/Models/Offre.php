<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $table = 'offres';
    protected $primaryKey = 'id_offre';
    protected $fillable = ['titre_offre', 'description_offre', 'ville','date_publication','date_limite', 'id_entreprise'];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class, 'id_entreprise');
    }

<<<<<<< HEAD
=======
    public function candidatures()
    {
        return $this->hasMany(Candidature::class,'id_offre');
    }

    

>>>>>>> 8e02f4232295ccca015242cb5beb6664f931c232
    public function emploi()
    {
        return $this->hasOne(Emploi::class, 'id_offre');
    }

    public function stage()
    {
        return $this->hasOne(Stage::class, 'id_offre');
    }

<<<<<<< HEAD
    public function afficherOffres()
    {
        // Récupérer toutes les offres d'emploi et de stage
        $offresEmploi = Offre::with('emploi')->where('type_offre', 'emploi')->get();
        $offresStage = Offre::with('stage')->where('type_offre', 'stage')->get();

        // Afficher les offres d'emploi
        foreach ($offresEmploi as $offre) {
            echo "Titre : " . $offre->titre_offre . "<br>";
            echo "Description : " . $offre->description_offre . "<br>";
            echo "Salaire : " . $offre->emploi->salaire . "<br>";
            echo "Lieu : " . $offre->emploi->lieu_emploi . "<br>";
            echo "Type de contrat : " . $offre->emploi->type_contrat . "<br>";
            echo "<br>";
        }

        // Afficher les offres de stage
        foreach ($offresStage as $offre) {
            echo "Titre : " . $offre->titre_offre . "<br>";
            echo "Description : " . $offre->description_offre . "<br>";
            echo "Rémunération : " . $offre->stage->remuneration_stage . "<br>";
            echo "Lieu : " . $offre->stage->lieu_stage . "<br>";
            echo "Durée : " . $offre->stage->duree_stage . "<br>";
            echo "<br>";
        }
    }
=======
>>>>>>> 8e02f4232295ccca015242cb5beb6664f931c232
}
