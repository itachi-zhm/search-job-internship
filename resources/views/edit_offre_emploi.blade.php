<form action="{{ route('emploi.update', ['id_offre' => $offre->id_offre]) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Champs du formulaire pour les données à modifier -->
    <input type="text" name="titre_offre" value="{{ $offre->titre_offre }}">
    <input type="text" name="ville" value="{{ $offre->ville }}">
    <textarea name="description_offre">{{ $offre->description_offre }}</textarea>
    <!-- Ajoutez les autres champs que vous souhaitez modifier pour l'offre d'emploi -->

    <!-- Champs du formulaire pour les données spécifiques à l'emploi -->
    <input type="number" name="salaire" value="{{ $emploi->salaire }}">
    
    <input type="text" name="type_contrat" value="{{ $emploi->type_contrat }}">
    <!-- Ajoutez les autres champs que vous souhaitez modifier pour l'emploi -->

    <button type="submit">Modifier</button>
</form>
