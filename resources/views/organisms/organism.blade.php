@extends('../template')
@section('contenu')
<div class="text-center my-3 display-4">Taux : {{ $organism->taux }}</div>
<a href="new" type="button" class="btn btn-primary my-3" aria-pressed="true">Nouveau organism</a>
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
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $organism->id}} </td>
            <td> {{ $organism->nom}} </td>
            <td> {{ $organism->telephone}} </td>
            <td> {{ $organism->mail}} </td>
            <td> {{ $organism->boite_postale}} </td>
            <td> {{ $organism->n_tahiti}} </td>
            <td> {{ $organism->password}} </td>
            <td> {{ $organism->credibilite}} </td>
            <td> <a href="{{$organism->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$organism->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
    </tbody>
</table>
@stop