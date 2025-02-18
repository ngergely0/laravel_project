@extends('layout')

<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>

@section('content')
    <h1>"{{ $model->name }}" modell</h1>
    <div class="row">
        <div>{{$model->id }}</div>
        <div>{{$model->name}}</div>
    </div>
@endsection 