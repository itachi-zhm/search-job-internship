<form method="POST" action="{{ route('envoyer_email') }}">
    @csrf

    <input type="hidden" name="email_destinataire" value="{{$candidature->user->email}}">
    <label for="sujet">Sujet :</label>
    <input type="text" name="sujet" id="sujet">

    <label for="contenu">Contenu :</label>
    <textarea name="contenu" id="contenu"></textarea>

    

    <button type="submit">Envoyer</button>
</form>
