<form method="POST" action="{{ route('entreprise.create') }}" enctype="multipart/form-data">

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
            <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required autofocus />
        </div>
    </div>

    <div>
        <label for="email">{{ __('E-Mail Address') }}</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required />
        </div>
    </div>

    <div>
        <label for="description">{{ __('Description') }}</label>

        <div>
            <textarea id="description" name="description" rows="5">{{ old('description') }}</textarea>
        </div>
    </div>

    <div>
        <label for="adresse">{{ __('Adresse') }}</label>

        <div>
            <input id="adresse" type="text" name="adresse" value="{{ old('adresse') }}" />
        </div>
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>

        <div>
            <input id="password" type="password" name="password" required autocomplete="new-password" />
        </div>
    </div>

    <div>
        <label for="password-confirm">{{ __('Confirm Password') }}</label>

        <div>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>
    </div>

    <div>
        <label for="num_tel">{{ __('Numéro de téléphone') }}</label>

        <div>
            <input id="num_tel" type="text" name="num_tel" value="{{ old('num_tel') }}" required />
        </div>
    </div>

    <div>
        <label for="image">{{ __('Image') }}</label>

        <div>
            <input id="image" type="file" name="image" />
        </div>
    </div>

    <div>
        <button type="submit">
            {{ __('Register') }}
        </button>
    </div>
</form>
