@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des organisms
    </div>
</div>
<a href="organisms/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau organism</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>nom</th>
            <th>telephone</th>
            <th>mail</th>
            <th>boite postale</th>
            <th>n°tahiti</th>
            <th>password</th>
            <th>credibilite</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $organisms as $organism)
        <tr>
            <td> {{ $organism->id}} </td>
            <td> {{ $organism->nom}} </td>
            <td> {{ $organism->telephone}} </td>
            <td> {{ $organism->mail}} </td>
            <td> {{ $organism->boite_postale}} </td>
            <td> {{ $organism->n_tahiti}} </td>
            <td> {{ $organism->password}} </td>
            <td> {{ $organism->credibilite}} </td>
            <td> <a href="organisms/{{$organism->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="organisms/{{$organism->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$organism->id]) }}" method="post">
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