
<b>Vue operation de l'utilisateur</b> 


<table>
    <tr>
        <th>utilisateur_id</th>
        
        <th>operation_id</th>
        <th>action</th>
    </tr>
    <tr>
        <td>{{$useroperation->user_id}}</td>
        
        <td>{{$useroperation->operation_id}}</td>

        <td><a href="{{$useroperation->id}}/edit">editer</a></td>

    </tr>
</table>


<a href="/useroperations"><button>retour</button></a>