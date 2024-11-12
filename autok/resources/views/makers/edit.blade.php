@extends('layouts.app')
@section('content')
<div>
    @include("error")
    <form action="{{ route('makers.update', $maker->id) }}" method="post" class="edit">
        @csrf
        @method('PATCH')
        <fieldset>
            <label for="name">Új név:</label>
            <input type="text" name="name" id="name" required value="{{old('name', $maker->name)}}">
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('makers') }}" class="cancel"> Mégse</a>
    </form>
</div>
@endsection