<form method="POST" action="{{ route('emploi.store') }}">



    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    @csrf
    <input type='hidden' name="id_offre" value="{{ $id_offre }}">
    <label for="salaire">Salaire:</label>
    <input type="number" name="salaire" required>


    <label for="lieu">Lieu:</label>
    <input type="text" name="lieu_emploi" required>

    <label for="type_contrat">Type de contrat:</label>
    <input type="text" name="type_contrat" required>

    <button type="submit">Créer l'offre d'emploi</button>

</form>
