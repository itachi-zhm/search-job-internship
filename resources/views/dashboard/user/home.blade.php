<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard | Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                 <h4>user Dashboard</h4><hr>
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
                                 <td>{{ Auth::guard('web')->user()->nom }}</td>
                                 <td>{{ Auth::guard('web')->user()->email }}</td>
                                 <td>
                                    <img src="{{asset('storage/'.Auth::guard('web')->user()->image)}}" alt="Photo de profil" width="100" height="100">
                                 </td>
                                 <td>
                                    <a href="{{ asset('storage/' . Auth::guard('web')->user()->cv) }}" target="_blank">Télécharger CV</a>
                                 </td>
                                 <td>
                                     <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                                 </td>
                             </tr>
                         </tbody>
                 </table>
            </div>
        </div>
    </div>
    <a href="{{route('user.candidatures',['id_user'=>Auth::guard('web')->user()->id])}}">voir candidature</a><br>
    <a href="{{route('user.editer',['id_user' => Auth::guard('web')->user()->id])}}">modifier les information personnel</a>
</body>
</html>