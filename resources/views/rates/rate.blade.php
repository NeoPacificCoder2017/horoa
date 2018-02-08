@extends('../template')
@section('contenu')
<div class="text-center my-3 display-4">Taux : {{ $rate->taux }}</div>
<a href="new" type="button" class="btn btn-primary my-3" aria-pressed="true">Nouveau rate</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Taux</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $rate->id}} </td>
            <td> {{ $rate->post}} </td>
            <td> <a href="{{$rate->id}}/edit" type="button" class="btn btn-primary" aria-pressed="true">Editer</a> </td>
            <td> 
            <Form action="{{ route('delete',[$rate->id]) }}" method="post">
                {{ csrf_field() }}
                <input  type="hidden" name="_method" value="DELETE"/>
                <input  type="submit" class="btn btn-danger" value="Delete"/>
            </Form>
            </td>
        </tr>
    </tbody>
</table>
@stop