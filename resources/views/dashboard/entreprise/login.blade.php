<form method="POST" action="{{ route('entreprise.check') }}">
    @csrf

    <div>
        <label for="email">{{ __('Adresse e-mail') }}</label>

        <div>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    
    <div>
        <button type="submit">
            {{ __('Se connecter') }}
        </button>

        
    </div>
</form>
