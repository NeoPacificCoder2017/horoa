</br></br>
<a href="useroperations/new"><button>Crée une nouvelle opération</button></a>
</br></br>

<table>
        <tr>
            <th>User_Id</th>
            <th>Operation_Id</th>
            <th calspan="2">Actions</th>
        </tr>
        <tr>

@foreach(App\userOperation::all() as $useroperation)

    <tr>
        
        <td><a href="useroperations/{{$useroperation->id}}">{{$useroperation->user_id}}</a></td>
        <td><a href="useroperations/{{$useroperation->id}}">{{$useroperation->operation_id}}</a></td>
       

        <td><a href="useroperations/{{$useroperation -> id}}"><button>Destroy</button><a></td>
        <td><a href="useroperations/{{$useroperation -> id}}"><button>Update</button><a></td>


       

    </tr>
@endforeach
</table>