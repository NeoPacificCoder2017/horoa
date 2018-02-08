@extends('../template')
@section('contenu')
<div class="text-center my-3 display-4">User Oranism N° : {{ $userorganism->id }}</div>
<a href="new" type="button" class="btn btn-primary my-3" aria-pressed="true">Nouveau userorganism</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>user_id</th>
            <th>organism_id</th>
            <th>credibilite</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $userorganism->id}} </td>
            <td> {{ $userorganism->user_id}} </td>
            <td> {{ $userorganism->organism_id}} </td>
            <td> {{ $userorganism->credibilite}} </td>
            <td> <a href="{{$userorganism->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$userorganism->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
    </tbody>
</table>
@stop