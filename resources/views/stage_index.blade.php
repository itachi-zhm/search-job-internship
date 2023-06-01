@foreach($stages as $stage)
    <h1>Titre : {{ $stage->offre->titre_offre }}</h1>    
    <p>Description : {{ $stage->offre->description_offre }}</p>
    <p>Entreprise : {{ $stage->offre->entreprise->nom }}</p>
    <h3>{{ $stage->remuneration_stage }}</h3>
    <p>duree_stage : {{ $stage->duree_stage }}</p>
    <p>Date de publication : {{ $stage->offre->date_publication }}</p>
    <form method="GET" action="{{route('offre.postuler')}}">
        <input type="hidden" name="id_offre" value="{{ $stage->offre->id_offre }}" />
        <button type="submit" value="postuler">postuler</button>
    </form>
@endforeach
