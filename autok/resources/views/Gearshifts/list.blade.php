@extends('layouts.app')
@section('content')
<div>
<div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Sebességváltók</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entities as $entity)
                <tr>
                    <td id="{{$entity->id}}">{{$entity->id}}</td>
                    <td>{{$entity->type}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection