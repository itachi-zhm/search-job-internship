<form action="{{ route('user.update', ['id_user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="{{ $user->nom }}" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="{{ $user->prenom }}" required>

    <label for="ville">Ville :</label>
    <input type="text" name="ville" id="ville" value="{{ $user->ville }}" required>

    <label for="adresse">Adresse :</label>
    <input type="text" name="adresse" id="adresse" value="{{ $user->adresse }}" required>

    <label for="num_tel">Numéro de téléphone :</label>
    <input type="text" name="num_tel" id="num_tel" value="{{ $user->num_tel }}" required>

    <label for="niveau_scolaire">Niveau scolaire :</label>
    <select name="niveau_scolaire" id="niveau_scolaire" required>
        <option value="bac" @if($user->niveau_scolaire === 'bac') selected @endif>Bac</option>
        <option value="bac+2" @if($user->niveau_scolaire === 'bac+2') selected @endif>Bac+2</option>
        <option value="bac+3" @if($user->niveau_scolaire === 'bac+3') selected @endif>Bac+3</option>
        <option value="bac+4" @if($user->niveau_scolaire === 'bac+4') selected @endif>Bac+4</option>
        <option value="bac+5" @if($user->niveau_scolaire === 'bac+5') selected @endif>Bac+5</option>
        <option value="doctorant" @if($user->niveau_scolaire === 'doctorant') selected @endif>Doctorant</option>
    </select>

    <label for="cv">CV :</label>
    <input type="file" name="cv" id="cv" accept=".pdf">
    <a href="{{ asset('storage/' .$user->cv) }}" target="_blank">Télécharger CV</a>

    <label for="image">Image :</label>
    <input type="file" name="image" id="image" accept=".png, .jpg, .svg">
    <img src="{{asset('storage/'.$user->image)}}" alt="Photo de profil" width="100" height="100">

    <button type="submit">Mettre à jour</button>
</form>
