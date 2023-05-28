<form method="POST" action="{{route('emploi.store')}}">

    @csrf
    <input type='hidden' name="id_offre" value="{{$id_offre}}">
    <label for="salaire">Salaire:</label>
    <input type="number" name="salaire" required>

    

    <label for="type_contrat">Type de contrat:</label>
    <input type="text" name="type_contrat" required>

    <button type="submit">Créer l'offre d'emploi</button>

</form>