<form method="POST" action="{{ route('stage.store') }}">
    @csrf

    <input type="hidden" name="id_offre" value="{{ $id_offre }}">

    <div>
        <label for="remuneration_stage">Rémunération</label>
        <input type="number" name="remuneration_stage" id="remuneration_stage" required>
    </div>

    <div>
        <label for="lieu_stage">Lieu</label>
        <input type="text" name="lieu_stage" id="lieu_stage" required>
    </div>

    <div>
        <label for="duree_stage">Durée</label>
        <input type="number" name="duree_stage" id="duree_stage" required>
    </div>

    <button type="submit">Créer le stage</button>
</form>
