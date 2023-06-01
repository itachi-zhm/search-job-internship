@foreach($emplois as $emploi)
    <h1>Titre : {{ $emploi->titre_offre }}</h1>    
    <p>Description : {{ $emploi->description_offre }}</p>
    <p>Entreprise : {{ $emploi->entreprise->nom }}</p>
    <h3>{{ $emploi->emploi->type_contrat }}</h3>
    <p>salaire : {{ $emploi->emploi->salaire }}</p>
    <p>Date de publication : {{ $emploi->date_publication }}</p>
    <td><img src="{{ asset('storage/'.$emploi->entreprise->image) }}" alt="Photo de profil" width="100" height="100">
    <form action="{{ route('offres.destroy', $emploi->id_offre) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Supprimer</button>
    </form>
    <a href="{{route('emploi.editer',$emploi->id_offre)}}">editer</a>
    
@endforeach
