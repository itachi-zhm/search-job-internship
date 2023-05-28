<form method="POST" action="{{ route('user.create') }}" enctype="multipart/form-data">
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

    <div>
        <label for="nom">{{ __('Nom') }}</label>

        <div>
            <input id="nom" type="text" class="@error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

            @error('nom')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div>
        <label for="prenom">{{ __('Prénom') }}</label>

        <div>
            <input id="prenom" type="text" class="@error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom">

            @error('prenom')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div>
        <label for="email">{{ __('Adresse email') }}</label>

        <div>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div>
        <label for="password">{{ __('Mot de passe') }}</label>

        <div>
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div>
        <label for="password-confirm">{{ __('Confirmer le mot de passe') }}</label>

        <div>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <!--<div>
        <label for="ville">{{ __('Ville') }}</label>

        <div>
            <input id="ville" type="text" class="@error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville">

            @error('ville')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>-->
    <div>
        <label for="ville">Ville</label><br>
        <input type="text" name="ville">
    </div>

    <div>
        <label for="adresse">{{ __('Adresse') }}</label>

        <div>
            <input id="adresse" type="text" class="@error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse">

            @error('adresse')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div>
        <label for="num_tel">{{ __('Numéro de téléphone') }}</label>

        <div>
            <input id="num_tel" type="tel" class="@error('num_tel') is-invalid @enderror" name="num_tel" value="{{ old('num_tel') }}" required autocomplete="tel">

            @error('num_tel')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div>
        <label for="niveau_scolaire">Niveau scolaire</label><br>
        <select name="niveau_scolaire">
            <option value="bac">Bac</option>
            <option value="bac+1">Bac+1</option>
            <option value="bac+2">Bac+2</option>
            <option value="bac+3">Bac+3</option>
            <option value="bac+4">Bac+4</option>
            <option value="bac+5">Bac+5</option>
            <option value="doctorant">Doctorant</option>
        </select>
    </div>
        <div class="form-group">
            <label for="cv">Fichier CV (PDF)</label>
            <input type="file" id="cv" name="cv" accept=".pdf">
        </div>    
    <div>
        
        <label for="image">{{ __('Photo de profil') }}</label>

        <div>
            <input id="image" type="file" class="@error('image') is-invalid @enderror" name="image" accept="image/*">

            @error('image')
                <span role="alert">
                    <strong>
                    {{ $message }}</strong>
                </span>
                @enderror
                </div>
                </div>
                <div>
    <button type="submit">
        {{ __('S\'inscrire') }}
    </button>
</div>
</form>

