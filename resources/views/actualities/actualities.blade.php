@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des actualities
    </div>
</div>
<a href="actualities/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau actuality</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>post</th>
            <th>date</th>
            <th>heure</th>
            <th>user_id</th>
            <th>operation_id</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $actualities as $actuality)
        <tr>
            <td> {{ $actuality->id}} </td>
            <td> {{ $actuality->post}} </td>
            <td> {{ $actuality->date}} </td>
            <td> {{ $actuality->heure}} </td>
            <td> {{ $actuality->user_id}} </td>
            <td> {{ $actuality->operation_id}} </td>
            <td> <a href="actualities/{{$actuality->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="actualities/{{$actuality->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$actuality->id]) }}" method="post">
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