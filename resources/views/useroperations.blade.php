</br></br>
<a href="modedon/new"><button>Crée une nouvelle opération pour un utilisateur</button></a>
</br></br>

<table>
        <tr>
            <th>utilisateur_id</th>
            <th>operation_id</th>
            <th calspan="2">Actions</th>
        </tr>
        <tr>

@foreach(App\userOpeation::all() as $useroperations)

    <tr>
        
        <td><a href="useroperation/{{$useroperations->id}}">{{$useroperations->user_id}}</a></td>

        <td><a href="useroperation/{{$useroperations->id}}">{{$useroperations->operation_id}}</a></td>
        <td><a href="useroperation/{{$useroperations -> id}}"><button>Destroy</button><a></td>
        <td><a href="useroperation/{{$useroperations -> id}}"><button>Update</button><a></td>


       

    </tr>
@endforeach
</table>