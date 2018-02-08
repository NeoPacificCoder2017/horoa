@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des receptionmodeoperations
    </div>
</div>
<a href="receptionmodeoperations/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau receptionmodeoperation</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
           <th>reception mode id</th>
            <th>operation id</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $receptionmodeoperations as $receptionmodeoperation)
        <tr>
            <td> {{ $receptionmodeoperation->id}} </td>
            <td> {{ $receptionmodeoperation->reception_mode_id}} </td>
            <td> {{ $receptionmodeoperation->operation_id}} </td>
            <td> <a href="receptionmodeoperations/{{$receptionmodeoperation->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="receptionmodeoperations/{{$receptionmodeoperation->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$receptionmodeoperation->id]) }}" method="post">
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