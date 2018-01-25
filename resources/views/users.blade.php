</br></br>
<a href="users/new"><button>Crée un nouvelle Utilisateur</button></a>
</br></br>

<table>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th calspan="2">Actions</th>
        </tr>
        <tr>

@foreach(App\User::all() as $user)

    <tr>
        
        <td><a href="users/{{$user->id}}">{{$user->nom}}</a></td>
        <td><a href="users/{{$user->id}}">{{$user->prenom}}</a></td>
        <td><a href="users/{{$user->id}}">{{$user->email}}</a></td>
       

        <td><a href="users/{{$user -> id}}"><button>Destroy</button><a></td>
        <td><a href="users/{{$user -> id}}"><button>Update</button><a></td>


       

    </tr>
@endforeach
</table>