@extends('layouts.app')
@section('content')
<div>
    <form action="{{ route('makers.store') }}" method="post">
        @csrf
        <fieldset>
            <label for="name">Név:</label>
            <input type="text" name="name" id="name" required value="{{old('name', $maker->name)}}">
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('makers') }}">Mégse</a>
    </form>
</div>
@endsection