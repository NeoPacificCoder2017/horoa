</br></br>
<a href="users/new"><button>Crée un nouvelle Utilisateur</button></a>
</br></br>

<table>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>Porfile type</th>
            <th calspan="2">Actions</th>
        </tr>
        <tr>

@foreach(App\User::all() as $user)

    <tr>
        
        <td><a href="users/{{$user->id}}">{{$user->nom}}</a></td>
        <td><a href="users/{{$user->id}}">{{$user->prenom}}</a></td>
        <td><a href="users/{{$user->id}}">{{$user->email}}</a></td>
        <td><a href="users/{{$user->id}}">{{$user->profile_type_id}}</a></td>
       
        <form action="{{ url('/user/'.$user->id) }}" method="post">
            <input type="hidden" name="_method" value="delete" />
            <td><input type="submit" value="Destroy"></td>
            {!! csrf_field() !!}
        </form>


       

    </tr>
@endforeach
</table>