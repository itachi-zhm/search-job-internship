@foreach($emplois as $emploi)
    <h1>Titre : {{ $emploi->offre->titre_offre }}</h1>    
    <p>Description : {{ $emploi->offre->description_offre }}</p>
    <p>Entreprise : {{ $emploi->offre->entreprise->nom }}</p>
    <h3>{{ $emploi->type_contrat }}</h3>
    <p>salaire : {{ $emploi->salaire }}</p>
    <p>Date de publication : {{ $emploi->offre->date_publication }}</p>
    <form method="GET" action="{{route('offre.postuler')}}">
        <input type="hidden" name="id_offre" value="{{ $emploi->offre->id_offre }}" />
        <button type="submit" value="postuler">postuler</button>
    </form>
@endforeach
