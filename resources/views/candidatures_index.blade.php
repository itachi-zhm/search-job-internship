<h1>Liste des candidatures</h1>

    <table>
        <thead>
            <tr>
                <th>Offre</th>
                <th>Utilisateur</th>
                <th>Date de candidature</th>
                <th>cv</th>
                <th>traiter</th>
                <th>rdv</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($candidatures as $candidature)
            @if($candidature->etat_candidature==0)
                <tr>
                    <td>{{ $candidature->offre->titre_offre }}</td>
                    <td>{{ $candidature->user->nom }} {{ $candidature->user->prenom }}</td>
                    <td>{{ $candidature->created_at }}</td>
                    <td><a href="{{ asset('storage/' . $candidature->user->cv) }}" target="_blank">Télécharger CV</a></td>
                    <td> 
                        <form action="{{route('traiter.candidature',['id_candidature'=>$candidature->id_candidature])}}" method="GET">
                            @csrf
                            <button type="submit">traiter</button>
                        </form> 
                    </td>
                    <td>
                        <a href="{{route('candidature_rdv',['email_user'=>$candidature->user->email])}}">fixer un rendez-vous</a>
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
