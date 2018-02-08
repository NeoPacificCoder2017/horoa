@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des userorganisms
    </div>
</div>
<a href="userorganisms/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau userorganism</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>user_id</th>
            <th>organism_id</th>
            <th>credibilite</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $userorganisms as $userorganism)
        <tr>
            <td> {{ $userorganism->id}} </td>
            <td> {{ $userorganism->user_id}} </td>
            <td> {{ $userorganism->organism_id}} </td>
            <td> {{ $userorganism->credibilite}} </td>
            <td> <a href="userorganisms/{{$userorganism->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="userorganisms/{{$userorganism->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$userorganism->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop