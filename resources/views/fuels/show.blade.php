@extends('layout')

<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>

@section('content')
    <h1>"{{ $fuel->name }}" üzemanyag</h1>
    <div class="row">
        <div>{{ $fuel->id }}</div>
        <div>{{$fuel->name}}</div>
    </div>
@endsection 