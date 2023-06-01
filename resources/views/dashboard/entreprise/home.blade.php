<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entreprise Dashboard | Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                 <h4>entreprise Dashboard</h4><hr>
                 <table class="table table-striped table-inverse table-responsive">
                     <thead class="thead-inverse">
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>image</th>
                             <th>Action</th>
                         </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>{{ Auth::guard('entreprise')->user()->nom }}</td>
                                 <td>{{ Auth::guard('entreprise')->user()->email }}</td>
                                 <td><img src="{{ asset('storage/'.Auth::guard('entreprise')->user()->image) }}" alt="Photo de profil" width="100" height="100">

                                 </td>
                                 <td>
                                     <a href="{{ route('entreprise.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('entreprise.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                                 </td>
                             </tr>
                         </tbody>
                 </table>
            </div>
            <a href="{{route('offre.create')}}">créer une offre</a><br>
            <a href="{{route('offres.entreprise' , ['id_entreprise' => Auth::guard('entreprise')->user()->id])}}">Voir les offres</a><br>
            <a href="{{ route('offres.candidatures', ['id_entreprise' => Auth::guard('entreprise')->user()->id]) }}">Voir les nouveaux candidature</a><br>
            <a href="{{route('emploi.entreprise',['id_entreprise' => Auth::guard('entreprise')->user()->id])}}">Voir offre d'emplois</a><br>
            <a href="{{route('stage.entreprise',['id_entreprise' => Auth::guard('entreprise')->user()->id])}}">Voir offre de stages</a><br>
            <a href="">Voir tous les candidatures</a><br>
            <a href="{{route('entreprise.editer',['id_entreprise' => Auth::guard('entreprise')->user()->id])}}">modifier les information de l'entreprise</a>
            
        </div>
    </div>
    
</body>
</html>