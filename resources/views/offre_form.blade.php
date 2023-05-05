<form method="POST" action="{{ route('offre.store') }}">
    @csrf
    <label for="titre_offre">Titre de l'offre</label>
    <input id="titre_offre" type="text" name="titre_offre" required><br>

    <label for="description_offre">Description de l'offre</label>
    <textarea id="description_offre" name="description_offre" required></textarea><br>

    <!--<label for="date_publication">Date de publication</label>
    <input id="date_publication" type="date" name="date_publication" required><br>-->

    <label for="date_limite">Date limite</label>
    <input id="date_limite" type="date" name="date_limite" required><br>

    <label for="type_offre">Type d'offre</label>
    <select id="type_offre" name="type_offre" required>
        <option value="emploi">Emploi</option>
        <option value="stage">Stage</option>
    </select><br>

    <button type="submit">Créer l'offre</button>
</form>
