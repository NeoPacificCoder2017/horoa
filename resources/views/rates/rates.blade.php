@extends('../template')
@section('contenu')
<div class="text-center">
    <div class="display-3 my-3">
        Liste des rates
    </div>
</div>
<a href="rates/new" type="button" class="btn btn-primary float-right my-3" aria-pressed="true">Nouveau rate</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Taux</th>
            <th>Editer</th>
            <th>Voir</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $rates as $rate)
        <tr>
            <td> {{ $rate->id}} </td>
            <td> {{ $rate->taux}} </td>
            <td> <a href="rates/{{$rate->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> <a href="rates/{{$rate->id}}/" type="button" class="btn btn-success" aria-pressed="true">Voir</a> </td>
            <td> 
            <Form action="{{ route('delete',[$rate->id]) }}" method="post">
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