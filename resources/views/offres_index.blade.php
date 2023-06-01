<!--<h1>Offres d'emploi</h1>
//@//foreach (//$offresEmploi as $offreEmploi)
    <p>{//{ //$offreEmploi->titre_offre }}</p>
    
    <p>{/{ //$offreEmploi->emploi->salaire }}</p>
    <p>{/{ //$offreEmploi->emploi->type_contrat }}</p>
//@//endforeach

//<h1>Offres de stage//</h1>
@/f//oreach ($offresStage as $offreStage)
    <p>{/{ $offreStage->titre_offre }}</p>
    
    <p> {/{ //$offreStage->stage->remuneration_stage }}</p>
    //<p>{/{ //$offreStage->stage->duree_stage }}</p>
@/endf/oreach-->
@foreach($offres as $offre)
    <h1>Titre : {{ $offre->titre_offre }}</h1>    
    <p>Description : {{ $offre->description_offre }}</p>
    <p>Entreprise : {{ $offre->entreprise->nom }}</p>
    <p>Date de publication : {{ $offre->date_publication }}</p>
    <p>type : {{$offre->type_offre}}</p>
    @if($offre->type_offre=='emploi')
        <p>Salaire : </p>
    @endif
    <form action="{{ route('offres.destroy', $offre->id_offre) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Supprimer</button>
    </form>
@endforeach
