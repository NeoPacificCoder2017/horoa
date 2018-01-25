<b>Vue de l'utilisateur</b> 
<a href="/users"><button>retour a la liste d'utilisateur</button></a>



<table>
    <tr>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th colspan="3">action</th>
    </tr>
    <tr>
        <td>{{$user->nom}}</td>
        <td>{{$user->prenom}}</td>
        <td>{{$user->email}}</td>

        <td><a href="{{$user->id}}/edit">editer</a></td>


    </tr>
</table>