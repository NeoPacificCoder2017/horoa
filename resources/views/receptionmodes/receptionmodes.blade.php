@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des receptionmodes
    </div>
</div>
<a href="receptionmodes/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau receptionmode</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $receptionmodes as $receptionmode)
        <tr>
            <td> {{ $receptionmode->id}} </td>
            <td> {{ $receptionmode->title}} </td>
            <td> <a href="receptionmodes/{{$receptionmode->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="receptionmodes/{{$receptionmode->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$receptionmode->id]) }}" method="post">
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