<!-- edit.blade.php -->

<form action="{{ route('offre.update', $offre->id_offre) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="titre_offre">Titre de l'offre</label>
    <input type="text" name="titre_offre" id="titre_offre" value="{{ $offre->titre_offre }}">

    <label for="description_offre">Description de l'offre</label>
    <textarea name="description_offre" id="description_offre">{{ $offre->description_offre }}</textarea>

    <label for="date_publication">Date de publication</label>
    <input type="date" name="date_publication" id="date_publication" value="{{ $offre->date_publication }}">

    <label for="date_limite">Date limite</label>
    <input type="date" name="date_limite" id="date_limite" value="{{ $offre->date_limite }}">

    <label for="type_offre">Type d'offre</label>
    <select name="type_offre" id="type_offre">
        <option value="emploi" {{ $offre->type_offre === 'emploi' ? 'selected' : '' }}>Emploi</option>
        <option value="stage" {{ $offre->type_offre === 'stage' ? 'selected' : '' }}>Stage</option>
    </select>

    <label for="id_entreprise">Entreprise</label>
    <select name="id_entreprise" id="id_entreprise">
        @foreach ($entreprises as $entreprise)
            <option value="{{ $entreprise->id }}" {{ $entreprise->id === $offre->id_entreprise ? 'selected' : '' }}>
                {{ $entreprise->nom }}
            </option>
        @endforeach
    </select>

    <button type="submit">Mettre à jour l'offre</button>
</form>
