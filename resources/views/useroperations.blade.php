</br></br>
<a href="useroperation/new"><button>Crée une nouvelle opération pour un utilisateur</button></a>
</br></br>

<table>
        <tr>
            <th>utilisateur_id</th>
            <th>operation_id</th>
            <th calspan="2">Actions</th>
        </tr>
        <tr>

@foreach(App\userOperation::all() as $useroperation)

    <tr>
        
        <td><a href="useroperation/{{$useroperation->id}}">{{$useroperation->user_id}}</a></td>

        <td><a href="useroperation/{{$useroperation->id}}">{{$useroperation->operation_id}}</a></td>

        <form action="{{ url('/useroperation/'.$useroperation->id) }}" method="post">
            <input type="hidden" name="_method" value="delete" />
            <td><input type="submit" value="Destroy"></td>
            {!! csrf_field() !!}
        </form>



       

    </tr>
@endforeach
</table>