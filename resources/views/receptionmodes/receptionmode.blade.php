@extends('../template')
@section('contenu')
<div class="text-center my-3 display-4">Taux : {{ $receptionmode->title }}</div>
<a href="new" type="button" class="btn btn-primary my-3" aria-pressed="true">Nouveau receptionmode</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Titre</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $receptionmode->id}} </td>
            <td> {{ $receptionmode->title}} </td>
            <td> <a href="{{$receptionmode->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$receptionmode->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
    </tbody>
</table>
@stop