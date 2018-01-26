</br></br>
<a href="modedon/new"><button>Crée un nouveau mode de don</button></a>
</br></br>

<table>
        <tr>
            <th>nom</th>
            <th calspan="2">Actions</th>
        </tr>
        <tr>

@foreach(App\modeDon::all() as $modedon)

    <tr>
        
        <td><a href="modedon/{{$modedon->id}}">{{$modedon->nom}}</a></td>

        <form action="{{ url('/modedons/'.$modedon->id) }}" method="post">
            <input type="hidden" name="_method" value="delete" />
            <td><input type="submit" value="Destroy"></td>
            {!! csrf_field() !!}
        </form>


       

    </tr>
@endforeach
</table>