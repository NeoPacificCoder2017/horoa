<b>Vue de l'utilisateur</b> 
<a href="/users"><button>retour a la liste d'utilisateur</button></a>



<table>
    <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th >action</th>
    </tr>


    <tr>
            @foreach(App\User::all() as $user)
        <td>{{$user->nom}}</td>
        <td>{{$user->prenom}}</td>
        <td>{{$user->email}}</td>
        @endforeach
        <td><a href="{{$user->id}}/edit">editer</a></td>
    </tr>
  
</table>