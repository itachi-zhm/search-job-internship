<form method="POST" action="{{ route('entreprise.update', ['id_entreprise' => $entreprise->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Champ "Nom" -->
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="{{ old('nom', $entreprise->nom) }}" required>
    @error('nom')
        <span>{{ $message }}</span>
    @enderror

    

    <!-- Champ "Description" -->
    <label for="description">Description :</label>
    <textarea name="description" id="description">{{ old('description', $entreprise->description) }}</textarea>
    @error('description')
        <span>{{ $message }}</span>
    @enderror

    <!-- Champ "Ville" -->
    <label for="ville">Ville :</label>
    <input type="text" name="ville" id="ville" value="{{ old('ville', $entreprise->ville) }}" required>
    @error('ville')
        <span>{{ $message }}</span>
    @enderror

    <!-- Champ "Adresse" -->
    <label for="adresse">Adresse :</label>
    <input type="text" name="adresse" id="adresse" value="{{ old('adresse', $entreprise->adresse) }}">
    @error('adresse')
        <span>{{ $message }}</span>
    @enderror

    <!-- Champ "Domaine" -->
    <label for="domaine">Domaine :</label>
    <select name="domaine" id="domaine" required>
        <option value="technologie" {{ old('domaine', $entreprise->domaine) === 'technologie' ? 'selected' : '' }}>Technologie</option>
        <option value="santé" {{ old('domaine', $entreprise->domaine) === 'santé' ? 'selected' : '' }}>Santé</option>
        <option value="industrie" {{ old('domaine', $entreprise->domaine) === 'industrie' ? 'selected' : '' }}>Industrie</option>
        <option value="agriculture" {{ old('domaine', $entreprise->domaine) === 'agriculture' ? 'selected' : '' }}>Agriculture</option>
        <option value="restauration" {{ old('domaine', $entreprise->domaine) === 'restauration' ? 'selected' : '' }}>Restauration</option>
    </select>
    @error('domaine')
        <span>{{ $message }}</span>
    @enderror

    

    <!-- Champ "Numéro de téléphone" -->
    <label for="num_tel">Numéro de téléphone :</label>
    <input type="text" name="num_tel" id="num_tel" value="{{ old('num_tel', $entreprise->num_tel) }}" required>
    @error('num_tel')
        <span>{{ $message }}</span>
    @enderror

    <!-- Champ "Image" -->
    <label for="image">Image :</label>
    <input type="file" name="image" id="image" >
    <img src="{{ asset('storage/'.$entreprise->image) }}" alt="Photo de profil" width="80" height="80">
    @error('image')
        <span>{{ $message }}</span>
    @enderror

    <!-- Bouton de soumission -->
    <button type="submit">Modifier</button>
</form>
