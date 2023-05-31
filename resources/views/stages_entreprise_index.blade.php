@foreach($stages as $stage)
    <h1>Titre : {{ $stage->titre_offre }}</h1>    
    <p>Description : {{ $stage->description_offre }}</p>
    <p>Entreprise : {{ $stage->entreprise->nom }}</p>
    <h3>{{ $stage->stage->remuneration_stage }}</h3>
    <p>duree_stage : {{ $stage->stage->duree_stage }}</p>
    <p>Date de publication : {{ $stage->date_publication }}</p>
    <td><img src="{{ asset('storage/'.$stage->entreprise->image) }}" alt="Photo de profil" width="100" height="100">
    <form action="{{ route('offres.destroy', $stage->id_offre) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Supprimer</button>
    </form>
    <a href="{{route('stage.editer',$stage->id_offre)}}">editer</a>
@endforeach
